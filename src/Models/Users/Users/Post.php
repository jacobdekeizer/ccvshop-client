<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Users\Users;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Username must be unique within the webshop.
     */
    private $username;
    
    /**
     * @var string Password of this user
     */
    private $password;
    
    /**
     * @var string|null Deprecated. Password encryption type. Only use this if you're instructed to change this value.
     */
    private $encryption;
    
    /**
     * @var int|null User group id
     */
    private $groupId;
    
    /**
     * @var string|null Deprecated. Gender of user. Please use 'userinfo->billingaddress->gender'
     */
    private $gender;
    
    /**
     * @var bool|null Status of the user. Disabled users can't log in.
     */
    private $status;
    
    /**
     * @var string|null If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     */
    private $productInCategoryDiscount;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo|null Describes personal information of the user
     */
    private $userinfo;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string Username must be unique within the webshop.
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    
    /**
     * @return string Password of this user
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    
    /**
     * @return string|null Deprecated. Password encryption type. Only use this if you're instructed to change this value.
     */
    public function getEncryption(): ?string
    {
        return $this->encryption;
    }
    
    /**
     * @return int|null User group id
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }
    
    /**
     * @return string|null Deprecated. Gender of user. Please use 'userinfo->billingaddress->gender'
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }
    
    /**
     * @return bool|null Status of the user. Disabled users can't log in.
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }
    
    /**
     * @return string|null If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     */
    public function getProductInCategoryDiscount(): ?string
    {
        return $this->productInCategoryDiscount;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo|null Describes personal information of the user
     */
    public function getUserinfo(): ?\JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo
    {
        return $this->userinfo;
    }
    
    /**
     * @param string $username Username must be unique within the webshop.
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        $this->propertyFilled('username');
        return $this;
    }
    
    /**
     * @param string $password Password of this user
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        $this->propertyFilled('password');
        return $this;
    }
    
    /**
     * @param string|null $encryption Deprecated. Password encryption type. Only use this if you're instructed to change this value.
     * @return self
     */
    public function setEncryption(?string $encryption): self
    {
        $this->encryption = $encryption;
        $this->propertyFilled('encryption');
        return $this;
    }
    
    /**
     * @param int|null $groupId User group id
     * @return self
     */
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        $this->propertyFilled('groupId');
        return $this;
    }
    
    /**
     * @param string|null $gender Deprecated. Gender of user. Please use 'userinfo->billingaddress->gender'
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        $this->propertyFilled('gender');
        return $this;
    }
    
    /**
     * @param bool|null $status Status of the user. Disabled users can't log in.
     * @return self
     */
    public function setStatus(?bool $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }
    
    /**
     * @param string|null $productInCategoryDiscount If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     * @return self
     */
    public function setProductInCategoryDiscount(?string $productInCategoryDiscount): self
    {
        $this->productInCategoryDiscount = $productInCategoryDiscount;
        $this->propertyFilled('productInCategoryDiscount');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo|null $userinfo Describes personal information of the user
     * @return self
     */
    public function setUserinfo(?\JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo $userinfo): self
    {
        $this->userinfo = $userinfo;
        $this->propertyFilled('userinfo');
        return $this;
    }
}
