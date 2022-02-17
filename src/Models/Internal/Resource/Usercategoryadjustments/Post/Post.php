<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Usercategoryadjustments\Post;

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
     * @var int Unique id of the category.
     */
    private int $categoryId;

    /**
     * @var int Unique id of the user.
     */
    private int $userId;

    /**
     * @var float|null Adjusted discount percentage that is applied to all products in this category.
     */
    private ?float $discount;

    /**
     * @var bool|null If TRUE then this categoy and its products won't be visible for this user.
     */
    private ?bool $hidden;

    /**
     * @var bool|null If TRUE this adjustment will be inherited by all sub categories of this one.
     */
    private ?bool $includeSubCategories;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return float|null Adjusted discount percentage that is applied to all products in this category.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @return bool|null If TRUE then this categoy and its products won't be visible for this user.
     */
    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    /**
     * @return bool|null If TRUE this adjustment will be inherited by all sub categories of this one.
     */
    public function getIncludeSubCategories(): ?bool
    {
        return $this->includeSubCategories;
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
     * @param float|null $discount Adjusted discount percentage that is applied to all products in this category.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param bool|null $hidden If TRUE then this categoy and its products won't be visible for this user.
     * @return self
     */
    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * @param bool|null $includeSubCategories If TRUE this adjustment will be inherited by all sub categories of this one.
     * @return self
     */
    public function setIncludeSubCategories(?bool $includeSubCategories): self
    {
        $this->includeSubCategories = $includeSubCategories;
        return $this;
    }
}
