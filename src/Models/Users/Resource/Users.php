<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Users\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Users implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var int User id
     */
    private $id;
    
    /**
     * @var string Username must be unique within the webshop.
     */
    private $username;
    
    /**
     * @var int|null Group id
     */
    private $groupId;
    
    /**
     * @var bool Status of the user. Disabled users can't log in.
     */
    private $status;
    
    /**
     * @var string Approval status of the user. Pending users are waiting on acceptance or rejection.
     */
    private $approvalStatus;
    
    /**
     * @var string If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest
     */
    private $productInCategoryDiscount;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo Describes personal information of the user
     */
    private $userinfo;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpoints|null Contains link to creditpoint resource.
     */
    private $creditpoints;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpointmutations|null Contains link to creditpoinmutations collection resource.
     */
    private $creditpointmutations;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Disabledpaymethods|null Contains link to disabledpaymethods collection resource.
     */
    private $disabledpaymethods;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Users\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    private $parent;
    
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
     * @return int User id
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return string Username must be unique within the webshop.
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    
    /**
     * @return int|null Group id
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }
    
    /**
     * @return bool Status of the user. Disabled users can't log in.
     */
    public function getStatus(): bool
    {
        return $this->status;
    }
    
    /**
     * @return string Approval status of the user. Pending users are waiting on acceptance or rejection.
     */
    public function getApprovalStatus(): string
    {
        return $this->approvalStatus;
    }
    
    /**
     * @return string If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest
     */
    public function getProductInCategoryDiscount(): string
    {
        return $this->productInCategoryDiscount;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo Describes personal information of the user
     */
    public function getUserinfo(): \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo
    {
        return $this->userinfo;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpoints|null Contains link to creditpoint resource.
     */
    public function getCreditpoints(): ?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpoints
    {
        return $this->creditpoints;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpointmutations|null Contains link to creditpoinmutations collection resource.
     */
    public function getCreditpointmutations(): ?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpointmutations
    {
        return $this->creditpointmutations;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Disabledpaymethods|null Contains link to disabledpaymethods collection resource.
     */
    public function getDisabledpaymethods(): ?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\Disabledpaymethods
    {
        return $this->disabledpaymethods;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Users\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\ParentItem
    {
        return $this->parent;
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
     * @param int $id User id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
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
     * @param int|null $groupId Group id
     * @return self
     */
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        $this->propertyFilled('groupId');
        return $this;
    }
    
    /**
     * @param bool $status Status of the user. Disabled users can't log in.
     * @return self
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }
    
    /**
     * @param string $approvalStatus Approval status of the user. Pending users are waiting on acceptance or rejection.
     * @return self
     */
    public function setApprovalStatus(string $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;
        $this->propertyFilled('approvalStatus');
        return $this;
    }
    
    /**
     * @param string $productInCategoryDiscount If B2B is enabled and this user has category price adjustments this setting is applicable. If a product is in multiple categories this setting determines which discount is applied. Either the highest or the lowest
     * @return self
     */
    public function setProductInCategoryDiscount(string $productInCategoryDiscount): self
    {
        $this->productInCategoryDiscount = $productInCategoryDiscount;
        $this->propertyFilled('productInCategoryDiscount');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo $userinfo Describes personal information of the user
     * @return self
     */
    public function setUserinfo(\JacobDeKeizer\Ccv\Models\Users\Entity\Personalinfo $userinfo): self
    {
        $this->userinfo = $userinfo;
        $this->propertyFilled('userinfo');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpoints|null $creditpoints Contains link to creditpoint resource.
     * @return self
     */
    public function setCreditpoints(?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpoints $creditpoints): self
    {
        $this->creditpoints = $creditpoints;
        $this->propertyFilled('creditpoints');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpointmutations|null $creditpointmutations Contains link to creditpoinmutations collection resource.
     * @return self
     */
    public function setCreditpointmutations(?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\Creditpointmutations $creditpointmutations): self
    {
        $this->creditpointmutations = $creditpointmutations;
        $this->propertyFilled('creditpointmutations');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Users\Child\Resource\Disabledpaymethods|null $disabledpaymethods Contains link to disabledpaymethods collection resource.
     * @return self
     */
    public function setDisabledpaymethods(?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\Disabledpaymethods $disabledpaymethods): self
    {
        $this->disabledpaymethods = $disabledpaymethods;
        $this->propertyFilled('disabledpaymethods');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Users\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Users\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
