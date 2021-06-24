<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Usergroupproductadjustments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var float|null Adjusted price for this user group for this product.
     */
    private $price;

    /**
     * @var float|null Adjusted discount price for this user group for this product. Must be NULL if price is NULL too.
     */
    private $discount;

    /**
     * @var bool|null If TRUE then this product won't be visible for this user group.
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
     * @return float|null Adjusted price for this user group for this product.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return float|null Adjusted discount price for this user group for this product. Must be NULL if price is NULL too.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @return bool|null If TRUE then this product won't be visible for this user group.
     */
    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    /**
     * @param float|null $price Adjusted price for this user group for this product.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param float|null $discount Adjusted discount price for this user group for this product. Must be NULL if price is NULL too.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param bool|null $hidden If TRUE then this product won't be visible for this user group.
     * @return self
     */
    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        $this->propertyFilled('hidden');
        return $this;
    }
}
