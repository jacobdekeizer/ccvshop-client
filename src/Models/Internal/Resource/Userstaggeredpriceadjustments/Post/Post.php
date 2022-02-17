<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Userstaggeredpriceadjustments\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int Unique id of the product staggered price.
     */
    private int $staggeredpriceId;

    /**
     * @var int Unique id of the user.
     */
    private int $userId;

    /**
     * @var float|null Adjusted price for this user for this product staggered price.
     */
    private ?float $price;

    /**
     * @var float|null Adjusted discount price for this user for this product staggered price.
     */
    private ?float $discount;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return float|null Adjusted price for this user for this product staggered price.
     */
    public function getPrice(): ?float
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
     * @param int $staggeredpriceId Unique id of the product staggered price.
     * @return self
     */
    public function setStaggeredpriceId(int $staggeredpriceId): self
    {
        $this->staggeredpriceId = $staggeredpriceId;
        return $this;
    }

    /**
     * @param int $userId Unique id of the user.
     * @return self
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param float|null $price Adjusted price for this user for this product staggered price.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param float|null $discount Adjusted discount price for this user for this product staggered price.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }
}
