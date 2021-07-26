<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Categories\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class LayoutOfProducts implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int Category products layout Id
     */
    private $id;

    /**
     * @var string Link to the layout of the products in this category resource
     */
    private $href;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int Category products layout Id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Link to the layout of the products in this category resource
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param int $id Category products layout Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $href Link to the layout of the products in this category resource
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
