<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Invoicenotifications implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var int Unique id of the invoice
     */
    private $invoiceId;

    /**
     * @var string The prefix determines the destination (customer). The second part determines the document. These correspond with the backend option a merchant has.
     */
    private $type;

    /**
     * @var string Createdate of this invoice notification in UTC
     */
    private $createDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoicenotifications\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Unique id of the invoice
     */
    public function getInvoiceId(): int
    {
        return $this->invoiceId;
    }

    /**
     * @return string The prefix determines the destination (customer). The second part determines the document. These correspond with the backend option a merchant has.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string Createdate of this invoice notification in UTC
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Invoicenotifications\Child\Resource\ParentItem
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
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int $invoiceId Unique id of the invoice
     * @return self
     */
    public function setInvoiceId(int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        $this->propertyFilled('invoiceId');
        return $this;
    }

    /**
     * @param string $type The prefix determines the destination (customer). The second part determines the document. These correspond with the backend option a merchant has.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string $createDate Createdate of this invoice notification in UTC
     * @return self
     */
    public function setCreateDate(string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoicenotifications\Child\Resource\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Invoicenotifications\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
