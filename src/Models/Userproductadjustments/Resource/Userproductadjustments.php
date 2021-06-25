<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Userproductadjustments implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource.
     */
    private $id;

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
     * @var float|null Adjusted discount price for this user for this product.
     */
    private $discount;

    /**
     * @var bool If TRUE then this product won't be visible for this user.
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
     * @return float|null Adjusted discount price for this user for this product.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @return bool If TRUE then this product won't be visible for this user.
     */
    public function getHidden(): bool
    {
        return $this->hidden;
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
     * @param float|null $discount Adjusted discount price for this user for this product.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param bool $hidden If TRUE then this product won't be visible for this user.
     * @return self
     */
    public function setHidden(bool $hidden): self
    {
        $this->hidden = $hidden;
        $this->propertyFilled('hidden');
        return $this;
    }
}