<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var float Number of products. Maximum percission is 3 (ie x.xxx).
     */
    private $quantity;
    
    /**
     * @var float Price of products
     */
    private $price;
    
    /**
     * @var float Discount of products
     */
    private $discount;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return float Number of products. Maximum percission is 3 (ie x.xxx).
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    
    /**
     * @return float Price of products
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    
    /**
     * @return float Discount of products
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }
    
    /**
     * @param float $quantity Number of products. Maximum percission is 3 (ie x.xxx).
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;
        $this->propertyFilled('quantity');
        return $this;
    }
    
    /**
     * @param float $price Price of products
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
    
    /**
     * @param float $discount Discount of products
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
}
