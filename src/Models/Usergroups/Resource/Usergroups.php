<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Usergroups\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Usergroups implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var int|null Unique id of the resource
     */
    private $id;
    
    /**
     * @var bool|null True if the group is a default group. New users are automatically added to the standard group.
     */
    private $default;
    
    /**
     * @var string|null Group name
     */
    private $groupname;
    
    /**
     * @var float|null Discount in percentage
     */
    private $discount;
    
    /**
     * @var string If B2B is enabled and this usergroup has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest
     */
    private $productInCategoryDiscount;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Users|null Group users
     */
    private $users;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Disabledpaymethods|null Contains link to disabledpaymethods collection resource.
     */
    private $disabledpaymethods;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return bool|null True if the group is a default group. New users are automatically added to the standard group.
     */
    public function getDefault(): ?bool
    {
        return $this->default;
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
     * @return string If B2B is enabled and this usergroup has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest
     */
    public function getProductInCategoryDiscount(): string
    {
        return $this->productInCategoryDiscount;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Users|null Group users
     */
    public function getUsers(): ?\JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Users
    {
        return $this->users;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Disabledpaymethods|null Contains link to disabledpaymethods collection resource.
     */
    public function getDisabledpaymethods(): ?\JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Disabledpaymethods
    {
        return $this->disabledpaymethods;
    }
    
    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
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
     * @param string $productInCategoryDiscount If B2B is enabled and this usergroup has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest
     * @return self
     */
    public function setProductInCategoryDiscount(string $productInCategoryDiscount): self
    {
        $this->productInCategoryDiscount = $productInCategoryDiscount;
        $this->propertyFilled('productInCategoryDiscount');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Users|null $users Group users
     * @return self
     */
    public function setUsers(?\JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Users $users): self
    {
        $this->users = $users;
        $this->propertyFilled('users');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Disabledpaymethods|null $disabledpaymethods Contains link to disabledpaymethods collection resource.
     * @return self
     */
    public function setDisabledpaymethods(?\JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource\Disabledpaymethods $disabledpaymethods): self
    {
        $this->disabledpaymethods = $disabledpaymethods;
        $this->propertyFilled('disabledpaymethods');
        return $this;
    }
}
