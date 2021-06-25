<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Discountcoupons\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Products implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Product id
     */
    private $productId;
    
    /**
     * @var string Url to product resource
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
     * @return int Product id
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    
    /**
     * @return string Url to product resource
     */
    public function getHref(): string
    {
        return $this->href;
    }
    
    /**
     * @param int $productId Product id
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }
    
    /**
     * @param string $href Url to product resource
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
