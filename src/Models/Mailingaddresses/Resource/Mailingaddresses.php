<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Mailingaddresses implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string|null Name of the e-mail address owner
     */
    private $name;

    /**
     * @var string|null Company name
     */
    private $companyname;

    /**
     * @var string E-mail address
     */
    private $email;

    /**
     * @var string|null Languagecode (nl, de, uk etc) to send language specific mails
     */
    private $language;

    /**
     * @var int|null Mailinglist id
     */
    private $mailinglistId;

    /**
     * @var bool Is mailingaddress enabled
     */
    private $enable;

    /**
     * @var string|null The create date of mailingaddress, UTC
     */
    private $createDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Mailingaddresses\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Name of the e-mail address owner
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null Company name
     */
    public function getCompanyname(): ?string
    {
        return $this->companyname;
    }

    /**
     * @return string E-mail address
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string|null Languagecode (nl, de, uk etc) to send language specific mails
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return int|null Mailinglist id
     */
    public function getMailinglistId(): ?int
    {
        return $this->mailinglistId;
    }

    /**
     * @return bool Is mailingaddress enabled
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @return string|null The create date of mailingaddress, UTC
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Mailingaddresses\Child\Resource\ParentItem
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
     * @param string|null $name Name of the e-mail address owner
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $companyname Company name
     * @return self
     */
    public function setCompanyname(?string $companyname): self
    {
        $this->companyname = $companyname;
        $this->propertyFilled('companyname');
        return $this;
    }

    /**
     * @param string $email E-mail address
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        $this->propertyFilled('email');
        return $this;
    }

    /**
     * @param string|null $language Languagecode (nl, de, uk etc) to send language specific mails
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        $this->propertyFilled('language');
        return $this;
    }

    /**
     * @param int|null $mailinglistId Mailinglist id
     * @return self
     */
    public function setMailinglistId(?int $mailinglistId): self
    {
        $this->mailinglistId = $mailinglistId;
        $this->propertyFilled('mailinglistId');
        return $this;
    }

    /**
     * @param bool $enable Is mailingaddress enabled
     * @return self
     */
    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;
        $this->propertyFilled('enable');
        return $this;
    }

    /**
     * @param string|null $createDate The create date of mailingaddress, UTC
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Mailingaddresses\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Mailingaddresses\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
