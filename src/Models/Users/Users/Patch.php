<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Users\Users;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Username must be unique within the webshop.
     */
    private $username;

    /**
     * @var string|null Password of this user
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
     * @var bool|null Status of the user. Disabled users can't log in.
     */
    private $status;

    /**
     * @var string|null Approval status of the user. Pending users are waiting on acceptance or rejection. Only users with status pending can be patched. Rejected users will be notified and the user will be deleted.
     */
    private $approvalStatus;

    /**
     * @var string|null If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     */
    private $productInCategoryDiscount;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo|null Describes personal information of the user
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
     * @return string|null Username must be unique within the webshop.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null Password of this user
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string|null Deprecated. Password encryption type. Only use this if you're instructed to change this value.
     * @deprecated
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
     * @return bool|null Status of the user. Disabled users can't log in.
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @return string|null Approval status of the user. Pending users are waiting on acceptance or rejection. Only users with status pending can be patched. Rejected users will be notified and the user will be deleted.
     */
    public function getApprovalStatus(): ?string
    {
        return $this->approvalStatus;
    }

    /**
     * @return string|null If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest. Highest is the default.
     */
    public function getProductInCategoryDiscount(): ?string
    {
        return $this->productInCategoryDiscount;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo|null Describes personal information of the user
     */
    public function getUserinfo(): ?\JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo
    {
        return $this->userinfo;
    }

    /**
     * @param string|null $username Username must be unique within the webshop.
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        $this->propertyFilled('username');
        return $this;
    }

    /**
     * @param string|null $password Password of this user
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;
        $this->propertyFilled('password');
        return $this;
    }

    /**
     * @param string|null $encryption Deprecated. Password encryption type. Only use this if you're instructed to change this value.
     * @return self
     * @deprecated
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
     * @param string|null $approvalStatus Approval status of the user. Pending users are waiting on acceptance or rejection. Only users with status pending can be patched. Rejected users will be notified and the user will be deleted.
     * @return self
     */
    public function setApprovalStatus(?string $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;
        $this->propertyFilled('approvalStatus');
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
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo|null $userinfo Describes personal information of the user
     * @return self
     */
    public function setUserinfo(?\JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo $userinfo): self
    {
        $this->userinfo = $userinfo;
        $this->propertyFilled('userinfo');
        return $this;
    }
}
