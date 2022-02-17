<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Usergroupstaggeredpriceadjustments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Usergroupstaggeredpriceadjustments implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Unique id of the resource.
     */
    private int $id;

    /**
     * @var int Unique id of the product staggered price.
     */
    private int $staggeredpriceId;

    /**
     * @var int Unique id of the user group.
     */
    private int $usergroupId;

    /**
     * @var float Adjusted price for this user group for this product staggered price.
     */
    private float $price;

    /**
     * @var float|null Adjusted discount price for this user group for this product staggered price.
     */
    private ?float $discount;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return int Unique id of the user group.
     */
    public function getUsergroupId(): int
    {
        return $this->usergroupId;
    }

    /**
     * @return float Adjusted price for this user group for this product staggered price.
     */
    public function getPrice(): float
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
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $staggeredpriceId Unique id of the product staggered price.
     * @return self
     */
    public function setStaggeredpriceId(int $staggeredpriceId): self
    {
        $this->staggeredpriceId = $staggeredpriceId;
        return $this;
    }

    /**
     * @param int $usergroupId Unique id of the user group.
     * @return self
     */
    public function setUsergroupId(int $usergroupId): self
    {
        $this->usergroupId = $usergroupId;
        return $this;
    }

    /**
     * @param float $price Adjusted price for this user group for this product staggered price.
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param float|null $discount Adjusted discount price for this user group for this product staggered price.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }
}
