<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderrows\Orderrows;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var float|null Quantity of products.
     */
    private $count;
    
    /**
     * @var float|null Row original price. Sellprice is calculated as price - discount.
     */
    private $price;
    
    /**
     * @var float|null Row discount price. Sellprice is calculated as price - discount.
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
     * @return float|null Quantity of products.
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    
    /**
     * @return float|null Row original price. Sellprice is calculated as price - discount.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    
    /**
     * @return float|null Row discount price. Sellprice is calculated as price - discount.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }
    
    /**
     * @param float|null $count Quantity of products.
     * @return self
     */
    public function setCount(?float $count): self
    {
        $this->count = $count;
        $this->propertyFilled('count');
        return $this;
    }
    
    /**
     * @param float|null $price Row original price. Sellprice is calculated as price - discount.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
    
    /**
     * @param float|null $discount Row discount price. Sellprice is calculated as price - discount.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
}
