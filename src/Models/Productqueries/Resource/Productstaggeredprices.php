<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productstaggeredprices implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var int|null Staggered price id
     */
    private $id;
    
    /**
     * @var float|null Number of products
     */
    private $quantity;
    
    /**
     * @var float|null Price of products
     */
    private $price;
    
    /**
     * @var float|null Discount of products
     */
    private $discount;
    
    /**
     * @var float|null Sellprice of products
     */
    private $sellprice;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem|null Contains link to parent product
     */
    private $parent;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return int|null Staggered price id
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return float|null Number of products
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    
    /**
     * @return float|null Price of products
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    
    /**
     * @return float|null Discount of products
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }
    
    /**
     * @return float|null Sellprice of products
     */
    public function getSellprice(): ?float
    {
        return $this->sellprice;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem
    {
        return $this->parent;
    }
    
    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int|null $id Staggered price id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param float|null $quantity Number of products
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;
        $this->propertyFilled('quantity');
        return $this;
    }
    
    /**
     * @param float|null $price Price of products
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
    
    /**
     * @param float|null $discount Discount of products
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
    
    /**
     * @param float|null $sellprice Sellprice of products
     * @return self
     */
    public function setSellprice(?float $sellprice): self
    {
        $this->sellprice = $sellprice;
        $this->propertyFilled('sellprice');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem|null $parent Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
