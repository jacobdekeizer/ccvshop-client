<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Usergroups\Usergroups;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Group name
     */
    private $groupname;

    /**
     * @var float|null Discount in percentage
     */
    private $discount;

    /**
     * @var bool|null True if the group is a default group. New users are automatically added to the standard group.
     */
    private $default;

    /**
     * @var string|null If B2B is enabled and this usergroup has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     */
    private $productInCategoryDiscount;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Group name
     */
    public function getGroupname(): ?string
    {
        return $this->groupname;
    }

    /**
     * @return float|null Discount in percentage
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @return bool|null True if the group is a default group. New users are automatically added to the standard group.
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }

    /**
     * @return string|null If B2B is enabled and this usergroup has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     */
    public function getProductInCategoryDiscount(): ?string
    {
        return $this->productInCategoryDiscount;
    }

    /**
     * @param string|null $groupname Group name
     * @return self
     */
    public function setGroupname(?string $groupname): self
    {
        $this->groupname = $groupname;
        $this->propertyFilled('groupname');
        return $this;
    }

    /**
     * @param float|null $discount Discount in percentage
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param bool|null $default True if the group is a default group. New users are automatically added to the standard group.
     * @return self
     */
    public function setDefault(?bool $default): self
    {
        $this->default = $default;
        $this->propertyFilled('default');
        return $this;
    }

    /**
     * @param string|null $productInCategoryDiscount If B2B is enabled and this usergroup has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     * @return self
     */
    public function setProductInCategoryDiscount(?string $productInCategoryDiscount): self
    {
        $this->productInCategoryDiscount = $productInCategoryDiscount;
        $this->propertyFilled('productInCategoryDiscount');
        return $this;
    }
}