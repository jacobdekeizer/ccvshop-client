<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productstaggeredprices\Input;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Input implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var float Number of products. Maximum percission is 3 (ie x.xxx).
     */
    private float $quantity;

    /**
     * @var float Price of products
     */
    private float $price;

    /**
     * @var float Discount of products
     */
    private float $discount;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
        return $this;
    }

    /**
     * @param float $price Price of products
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param float $discount Discount of products
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }
}
