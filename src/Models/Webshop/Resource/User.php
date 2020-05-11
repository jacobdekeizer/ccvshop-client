<?php

namespace JacobDeKeizer\Ccv\Models\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class User implements Model
{
    use FromArray, ToArray;

    /**
     * @var int|null Unique id of the user. If null, no user was associated with this order
     */
     private $id;

    /**
     * @var float|null Percentage of discount this use received on this order. This discount is already calculated in the prices
     */
     private $discountPercentage;

    /**
     * @var string|null Link to user associated with this order
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
     * @return int|null Unique id of the user. If null, no user was associated with this order
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return float|null Percentage of discount this use received on this order. This discount is already calculated in the prices
     */
    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }

    /**
     * @return string|null Link to user associated with this order
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param int|null Unique id of the user. If null, no user was associated with this order
     * @return self
     */
    public function setId($id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param float|null Percentage of discount this use received on this order. This discount is already calculated in the prices
     * @return self
     */
    public function setDiscountPercentage($discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;
        $this->propertyFilled('discountPercentage');
        return $this;
    }

    /**
     * @param string|null Link to user associated with this order
     * @return self
     */
    public function setHref($href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
