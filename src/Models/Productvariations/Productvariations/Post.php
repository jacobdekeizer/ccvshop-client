<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productvariations\Productvariations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var int Product Id that is linked as variation.
     */
    private $productVariationId;

    /**
     * @var bool Inactive variation are hidden in the webshop.
     */
    private $active;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int Product Id that is linked as variation.
     */
    public function getProductVariationId(): int
    {
        return $this->productVariationId;
    }

    /**
     * @return bool Inactive variation are hidden in the webshop.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param int $productVariationId Product Id that is linked as variation.
     * @return self
     */
    public function setProductVariationId(int $productVariationId): self
    {
        $this->productVariationId = $productVariationId;
        $this->propertyFilled('productVariationId');
        return $this;
    }

    /**
     * @param bool $active Inactive variation are hidden in the webshop.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }
}
