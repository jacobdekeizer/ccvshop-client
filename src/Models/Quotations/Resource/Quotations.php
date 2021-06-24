<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Quotations\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Quotations implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var int Quotation id.
     */
    private $id;

    /**
     * @var string|null Prefix of the specific quotation number of the quotation. Automatically generated when the quotation is created.
     */
    private $quotationnumberPrefix;

    /**
     * @var int Quotation number, automatically generated when the quotation is created.
     */
    private $quotationnumber;

    /**
     * @var string Unique quotation number, Full quotation number as displayed in shop. With dash if the prefix is available.
     */
    private $quotationnumberFull;

    /**
     * @var string|null Prefix of the specific order number of the order that was created from this quotation. automatically generated when the order is created.
     */
    private $ordernumberPrefix;

    /**
     * @var int Order number of the order that was created from this quotation, automatically generated when the order is created.
     */
    private $ordernumber;

    /**
     * @var string Unique order number, Full ordernumber of the order that was created from this quotation as displayed in shop. With dash if the prefix is available.
     */
    private $ordernumberFull;

    /**
     * @var string Createdate of this quotation in UTC.
     */
    private $createDate;

    /**
     * @var string Status of the quotation. 1. Open. 2. Requested. 3. Send. 4. Accepted. 5. Concept. A concept quotation is a quotation that is created, but not yet saved. Thats also why concept quotations aren't visible for the merchant.
     */
    private $status;

    /**
     * @var string The display name of the quotation status.
     */
    private $statusName;

    /**
     * @var float Total price inc tax.
     */
    private $totalPriceIncTax;

    /**
     * @var float Total price excl tax.
     */
    private $totalPriceExcTax;

    /**
     * @var float Total price.
     */
    private $totalPrice;

    /**
     * @var float Total tax amount.
     */
    private $totalTax;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\User Link to possible user resource associated with this quotation.
     */
    private $user;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo Describes personal information of the customer.
     */
    private $customer;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\Quotationrows Products that are included in this quotation.
     */
    private $quotationrows;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Quotation id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null Prefix of the specific quotation number of the quotation. Automatically generated when the quotation is created.
     */
    public function getQuotationnumberPrefix(): ?string
    {
        return $this->quotationnumberPrefix;
    }

    /**
     * @return int Quotation number, automatically generated when the quotation is created.
     */
    public function getQuotationnumber(): int
    {
        return $this->quotationnumber;
    }

    /**
     * @return string Unique quotation number, Full quotation number as displayed in shop. With dash if the prefix is available.
     */
    public function getQuotationnumberFull(): string
    {
        return $this->quotationnumberFull;
    }

    /**
     * @return string|null Prefix of the specific order number of the order that was created from this quotation. automatically generated when the order is created.
     */
    public function getOrdernumberPrefix(): ?string
    {
        return $this->ordernumberPrefix;
    }

    /**
     * @return int Order number of the order that was created from this quotation, automatically generated when the order is created.
     */
    public function getOrdernumber(): int
    {
        return $this->ordernumber;
    }

    /**
     * @return string Unique order number, Full ordernumber of the order that was created from this quotation as displayed in shop. With dash if the prefix is available.
     */
    public function getOrdernumberFull(): string
    {
        return $this->ordernumberFull;
    }

    /**
     * @return string Createdate of this quotation in UTC.
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * @return string Status of the quotation. 1. Open. 2. Requested. 3. Send. 4. Accepted. 5. Concept. A concept quotation is a quotation that is created, but not yet saved. Thats also why concept quotations aren't visible for the merchant.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string The display name of the quotation status.
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }

    /**
     * @return float Total price inc tax.
     */
    public function getTotalPriceIncTax(): float
    {
        return $this->totalPriceIncTax;
    }

    /**
     * @return float Total price excl tax.
     */
    public function getTotalPriceExcTax(): float
    {
        return $this->totalPriceExcTax;
    }

    /**
     * @return float Total price.
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @return float Total tax amount.
     */
    public function getTotalTax(): float
    {
        return $this->totalTax;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\User Link to possible user resource associated with this quotation.
     */
    public function getUser(): \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\User
    {
        return $this->user;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo Describes personal information of the customer.
     */
    public function getCustomer(): \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo
    {
        return $this->customer;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\Quotationrows Products that are included in this quotation.
     */
    public function getQuotationrows(): \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\Quotationrows
    {
        return $this->quotationrows;
    }

    /**
     * @param string $href Link to self.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Quotation id.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $quotationnumberPrefix Prefix of the specific quotation number of the quotation. Automatically generated when the quotation is created.
     * @return self
     */
    public function setQuotationnumberPrefix(?string $quotationnumberPrefix): self
    {
        $this->quotationnumberPrefix = $quotationnumberPrefix;
        $this->propertyFilled('quotationnumberPrefix');
        return $this;
    }

    /**
     * @param int $quotationnumber Quotation number, automatically generated when the quotation is created.
     * @return self
     */
    public function setQuotationnumber(int $quotationnumber): self
    {
        $this->quotationnumber = $quotationnumber;
        $this->propertyFilled('quotationnumber');
        return $this;
    }

    /**
     * @param string $quotationnumberFull Unique quotation number, Full quotation number as displayed in shop. With dash if the prefix is available.
     * @return self
     */
    public function setQuotationnumberFull(string $quotationnumberFull): self
    {
        $this->quotationnumberFull = $quotationnumberFull;
        $this->propertyFilled('quotationnumberFull');
        return $this;
    }

    /**
     * @param string|null $ordernumberPrefix Prefix of the specific order number of the order that was created from this quotation. automatically generated when the order is created.
     * @return self
     */
    public function setOrdernumberPrefix(?string $ordernumberPrefix): self
    {
        $this->ordernumberPrefix = $ordernumberPrefix;
        $this->propertyFilled('ordernumberPrefix');
        return $this;
    }

    /**
     * @param int $ordernumber Order number of the order that was created from this quotation, automatically generated when the order is created.
     * @return self
     */
    public function setOrdernumber(int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        $this->propertyFilled('ordernumber');
        return $this;
    }

    /**
     * @param string $ordernumberFull Unique order number, Full ordernumber of the order that was created from this quotation as displayed in shop. With dash if the prefix is available.
     * @return self
     */
    public function setOrdernumberFull(string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        $this->propertyFilled('ordernumberFull');
        return $this;
    }

    /**
     * @param string $createDate Createdate of this quotation in UTC.
     * @return self
     */
    public function setCreateDate(string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param string $status Status of the quotation. 1. Open. 2. Requested. 3. Send. 4. Accepted. 5. Concept. A concept quotation is a quotation that is created, but not yet saved. Thats also why concept quotations aren't visible for the merchant.
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }

    /**
     * @param string $statusName The display name of the quotation status.
     * @return self
     */
    public function setStatusName(string $statusName): self
    {
        $this->statusName = $statusName;
        $this->propertyFilled('statusName');
        return $this;
    }

    /**
     * @param float $totalPriceIncTax Total price inc tax.
     * @return self
     */
    public function setTotalPriceIncTax(float $totalPriceIncTax): self
    {
        $this->totalPriceIncTax = $totalPriceIncTax;
        $this->propertyFilled('totalPriceIncTax');
        return $this;
    }

    /**
     * @param float $totalPriceExcTax Total price excl tax.
     * @return self
     */
    public function setTotalPriceExcTax(float $totalPriceExcTax): self
    {
        $this->totalPriceExcTax = $totalPriceExcTax;
        $this->propertyFilled('totalPriceExcTax');
        return $this;
    }

    /**
     * @param float $totalPrice Total price.
     * @return self
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        $this->propertyFilled('totalPrice');
        return $this;
    }

    /**
     * @param float $totalTax Total tax amount.
     * @return self
     */
    public function setTotalTax(float $totalTax): self
    {
        $this->totalTax = $totalTax;
        $this->propertyFilled('totalTax');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\User $user Link to possible user resource associated with this quotation.
     * @return self
     */
    public function setUser(\JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\User $user): self
    {
        $this->user = $user;
        $this->propertyFilled('user');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo $customer Describes personal information of the customer.
     * @return self
     */
    public function setCustomer(\JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo $customer): self
    {
        $this->customer = $customer;
        $this->propertyFilled('customer');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\Quotationrows $quotationrows Products that are included in this quotation.
     * @return self
     */
    public function setQuotationrows(\JacobDeKeizer\Ccv\Models\Quotations\Child\Resource\Quotationrows $quotationrows): self
    {
        $this->quotationrows = $quotationrows;
        $this->propertyFilled('quotationrows');
        return $this;
    }
}
