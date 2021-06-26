<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Unique id of the product.
     */
    private $productId;
    
    /**
     * @var int Unique id of the user.
     */
    private $userId;
    
    /**
     * @var float|null Adjusted price for this user for this product.
     */
    private $price;
    
    /**
     * @var float|null Adjusted discount price for this user for this product. Must be NULL if price is NULL too.
     */
    private $discount;
    
    /**
     * @var bool|null If TRUE then this product won't be visible for this user. Default is false
     */
    private $hidden;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return int Unique id of the product.
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    
    /**
     * @return int Unique id of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
    
    /**
     * @return float|null Adjusted price for this user for this product.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    
    /**
     * @return float|null Adjusted discount price for this user for this product. Must be NULL if price is NULL too.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }
    
    /**
     * @return bool|null If TRUE then this product won't be visible for this user. Default is false
     */
    public function getHidden(): ?bool
    {
        return $this->hidden;
    }
    
    /**
     * @param int $productId Unique id of the product.
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }
    
    /**
     * @param int $userId Unique id of the user.
     * @return self
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        $this->propertyFilled('userId');
        return $this;
    }
    
    /**
     * @param float|null $price Adjusted price for this user for this product.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
    
    /**
     * @param float|null $discount Adjusted discount price for this user for this product. Must be NULL if price is NULL too.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
    
    /**
     * @param bool|null $hidden If TRUE then this product won't be visible for this user. Default is false
     * @return self
     */
    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        $this->propertyFilled('hidden');
        return $this;
    }
}
