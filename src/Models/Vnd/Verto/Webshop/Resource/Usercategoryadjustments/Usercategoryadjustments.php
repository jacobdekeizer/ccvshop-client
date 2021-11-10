<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Usercategoryadjustments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Usercategoryadjustments implements Model
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
     * @var int Unique id of the category.
     */
    private int $categoryId;

    /**
     * @var int Unique id of the user.
     */
    private int $userId;

    /**
     * @var int|null Adjusted discount percentage that is applied to all products in this category.
     */
    private ?int $discount;

    /**
     * @var bool If TRUE then this categoy and its products won't be visible for this user.
     */
    private bool $hidden;

    /**
     * @var bool If TRUE this adjustment will be inherited by all sub categories of this one.
     */
    private bool $includeSubCategories;

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
     * @return int Unique id of the category.
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return int Unique id of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int|null Adjusted discount percentage that is applied to all products in this category.
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    /**
     * @return bool If TRUE then this categoy and its products won't be visible for this user.
     */
    public function getHidden(): bool
    {
        return $this->hidden;
    }

    /**
     * @return bool If TRUE this adjustment will be inherited by all sub categories of this one.
     */
    public function getIncludeSubCategories(): bool
    {
        return $this->includeSubCategories;
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
     * @param int $categoryId Unique id of the category.
     * @return self
     */
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
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
     * @param int|null $discount Adjusted discount percentage that is applied to all products in this category.
     * @return self
     */
    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param bool $hidden If TRUE then this categoy and its products won't be visible for this user.
     * @return self
     */
    public function setHidden(bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * @param bool $includeSubCategories If TRUE this adjustment will be inherited by all sub categories of this one.
     * @return self
     */
    public function setIncludeSubCategories(bool $includeSubCategories): self
    {
        $this->includeSubCategories = $includeSubCategories;
        return $this;
    }
}
