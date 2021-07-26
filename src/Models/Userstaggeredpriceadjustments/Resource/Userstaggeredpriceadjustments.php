<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Userstaggeredpriceadjustments implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource.
     */
    private $id;

    /**
     * @var int Unique id of the product staggered price.
     */
    private $staggeredpriceId;

    /**
     * @var int Unique id of the user.
     */
    private $userId;

    /**
     * @var float Adjusted price for this user for this product staggered price.
     */
    private $price;

    /**
     * @var float|null Adjusted discount price for this user for this product staggered price.
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
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Unique id of the product staggered price.
     */
    public function getStaggeredpriceId(): int
    {
        return $this->staggeredpriceId;
    }

    /**
     * @return int Unique id of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return float Adjusted price for this user for this product staggered price.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float|null Adjusted discount price for this user for this product staggered price.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
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
     * @param float $price Adjusted price for this user for this product staggered price.
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param float|null $discount Adjusted discount price for this user for this product staggered price.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
}
