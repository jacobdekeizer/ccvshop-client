<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var int Unique id of the product staggered price.
     */
    private $staggeredpriceId;

    /**
     * @var int Unique id of the user group.
     */
    private $usergroupId;

    /**
     * @var float|null Adjusted price for this user group for this product staggered price.
     */
    private $price;

    /**
     * @var float|null Adjusted discount price for this user group for this product staggered price.
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
     * @return int Unique id of the product staggered price.
     */
    public function getStaggeredpriceId(): int
    {
        return $this->staggeredpriceId;
    }

    /**
     * @return int Unique id of the user group.
     */
    public function getUsergroupId(): int
    {
        return $this->usergroupId;
    }

    /**
     * @return float|null Adjusted price for this user group for this product staggered price.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return float|null Adjusted discount price for this user group for this product staggered price.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param int $staggeredpriceId Unique id of the product staggered price.
     * @return self
     */
    public function setStaggeredpriceId(int $staggeredpriceId): self
    {
        $this->staggeredpriceId = $staggeredpriceId;
        $this->propertyFilled('staggeredpriceId');
        return $this;
    }

    /**
     * @param int $usergroupId Unique id of the user group.
     * @return self
     */
    public function setUsergroupId(int $usergroupId): self
    {
        $this->usergroupId = $usergroupId;
        $this->propertyFilled('usergroupId');
        return $this;
    }

    /**
     * @param float|null $price Adjusted price for this user group for this product staggered price.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param float|null $discount Adjusted discount price for this user group for this product staggered price.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
}