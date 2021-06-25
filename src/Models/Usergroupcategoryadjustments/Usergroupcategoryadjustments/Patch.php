<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var int|null Adjusted discount percentage that is applied to all products in this category.
     */
    private $discount;

    /**
     * @var bool|null If TRUE then this categoy and its products won't be visible for this user group.
     */
    private $hidden;

    /**
     * @var bool|null If TRUE this adjustment will be inherited by all sub categories of this one.
     */
    private $includeSubCategories;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Adjusted discount percentage that is applied to all products in this category.
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    /**
     * @return bool|null If TRUE then this categoy and its products won't be visible for this user group.
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
     * @param int|null $discount Adjusted discount percentage that is applied to all products in this category.
     * @return self
     */
    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param bool|null $hidden If TRUE then this categoy and its products won't be visible for this user group.
     * @return self
     */
    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        $this->propertyFilled('hidden');
        return $this;
    }

    /**
     * @param bool|null $includeSubCategories If TRUE this adjustment will be inherited by all sub categories of this one.
     * @return self
     */
    public function setIncludeSubCategories(?bool $includeSubCategories): self
    {
        $this->includeSubCategories = $includeSubCategories;
        $this->propertyFilled('includeSubCategories');
        return $this;
    }
}