<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Returns\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Returns implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var int Return id.
     */
    private $id;

    /**
     * @var string|null Prefix of the specific return number of the return. Automatically generated when the return is created.
     */
    private $returnnumberPrefix;

    /**
     * @var int Return number, automatically generated when the return is created.
     */
    private $returnnumber;

    /**
     * @var string Unique return number, Full return number as displayed in shop. With dash if the prefix is available.
     */
    private $returnnumberFull;

    /**
     * @var string|null Prefix of the specific order number of the order that this return is created from. automatically generated when the return is created.
     */
    private $ordernumberPrefix;

    /**
     * @var int Order number of the order that this return is created from, automatically generated when the return is created.
     */
    private $ordernumber;

    /**
     * @var string Unique order number, Full ordernumber of the order that this return is created from as displayed in shop. With dash if the prefix is available.
     */
    private $ordernumberFull;

    /**
     * @var string Createdate of this invoice in UTC.
     */
    private $createDate;

    /**
     * @var string Status of the return. 1. New. 2. Processing. 3. Custom 1. 4. Custom 2. 5. Custom 3. 6. Canceled. 7. Completed. 8. Credited.
     */
    private $status;

    /**
     * @var string The display name of the return status.
     */
    private $statusName;

    /**
     * @var string Action of the return. These are configured through the settings.
     */
    private $actionName;

    /**
     * @var string Reason of the return. These are configured through the settings.
     */
    private $reasonName;

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
     * @var string ISO 4217 Currency Code.
     */
    private $currency;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\User Link to possible user resource associated with this return.
     */
    private $user;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo Describes personal information of the customer.
     */
    private $customer;

    /**
     * @var string Link to the order associated with this return.
     */
    private $order;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\Returnrows Products that are included in this return.
     */
    private $returnrows;

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
     * @return int Return id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null Prefix of the specific return number of the return. Automatically generated when the return is created.
     */
    public function getReturnnumberPrefix(): ?string
    {
        return $this->returnnumberPrefix;
    }

    /**
     * @return int Return number, automatically generated when the return is created.
     */
    public function getReturnnumber(): int
    {
        return $this->returnnumber;
    }

    /**
     * @return string Unique return number, Full return number as displayed in shop. With dash if the prefix is available.
     */
    public function getReturnnumberFull(): string
    {
        return $this->returnnumberFull;
    }

    /**
     * @return string|null Prefix of the specific order number of the order that this return is created from. automatically generated when the return is created.
     */
    public function getOrdernumberPrefix(): ?string
    {
        return $this->ordernumberPrefix;
    }

    /**
     * @return int Order number of the order that this return is created from, automatically generated when the return is created.
     */
    public function getOrdernumber(): int
    {
        return $this->ordernumber;
    }

    /**
     * @return string Unique order number, Full ordernumber of the order that this return is created from as displayed in shop. With dash if the prefix is available.
     */
    public function getOrdernumberFull(): string
    {
        return $this->ordernumberFull;
    }

    /**
     * @return string Createdate of this invoice in UTC.
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * @return string Status of the return. 1. New. 2. Processing. 3. Custom 1. 4. Custom 2. 5. Custom 3. 6. Canceled. 7. Completed. 8. Credited.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string The display name of the return status.
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }

    /**
     * @return string Action of the return. These are configured through the settings.
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }

    /**
     * @return string Reason of the return. These are configured through the settings.
     */
    public function getReasonName(): string
    {
        return $this->reasonName;
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
     * @return string ISO 4217 Currency Code.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\User Link to possible user resource associated with this return.
     */
    public function getUser(): \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\User
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
     * @return string Link to the order associated with this return.
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\Returnrows Products that are included in this return.
     */
    public function getReturnrows(): \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\Returnrows
    {
        return $this->returnrows;
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
     * @param int $id Return id.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $returnnumberPrefix Prefix of the specific return number of the return. Automatically generated when the return is created.
     * @return self
     */
    public function setReturnnumberPrefix(?string $returnnumberPrefix): self
    {
        $this->returnnumberPrefix = $returnnumberPrefix;
        $this->propertyFilled('returnnumberPrefix');
        return $this;
    }

    /**
     * @param int $returnnumber Return number, automatically generated when the return is created.
     * @return self
     */
    public function setReturnnumber(int $returnnumber): self
    {
        $this->returnnumber = $returnnumber;
        $this->propertyFilled('returnnumber');
        return $this;
    }

    /**
     * @param string $returnnumberFull Unique return number, Full return number as displayed in shop. With dash if the prefix is available.
     * @return self
     */
    public function setReturnnumberFull(string $returnnumberFull): self
    {
        $this->returnnumberFull = $returnnumberFull;
        $this->propertyFilled('returnnumberFull');
        return $this;
    }

    /**
     * @param string|null $ordernumberPrefix Prefix of the specific order number of the order that this return is created from. automatically generated when the return is created.
     * @return self
     */
    public function setOrdernumberPrefix(?string $ordernumberPrefix): self
    {
        $this->ordernumberPrefix = $ordernumberPrefix;
        $this->propertyFilled('ordernumberPrefix');
        return $this;
    }

    /**
     * @param int $ordernumber Order number of the order that this return is created from, automatically generated when the return is created.
     * @return self
     */
    public function setOrdernumber(int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        $this->propertyFilled('ordernumber');
        return $this;
    }

    /**
     * @param string $ordernumberFull Unique order number, Full ordernumber of the order that this return is created from as displayed in shop. With dash if the prefix is available.
     * @return self
     */
    public function setOrdernumberFull(string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        $this->propertyFilled('ordernumberFull');
        return $this;
    }

    /**
     * @param string $createDate Createdate of this invoice in UTC.
     * @return self
     */
    public function setCreateDate(string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param string $status Status of the return. 1. New. 2. Processing. 3. Custom 1. 4. Custom 2. 5. Custom 3. 6. Canceled. 7. Completed. 8. Credited.
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }

    /**
     * @param string $statusName The display name of the return status.
     * @return self
     */
    public function setStatusName(string $statusName): self
    {
        $this->statusName = $statusName;
        $this->propertyFilled('statusName');
        return $this;
    }

    /**
     * @param string $actionName Action of the return. These are configured through the settings.
     * @return self
     */
    public function setActionName(string $actionName): self
    {
        $this->actionName = $actionName;
        $this->propertyFilled('actionName');
        return $this;
    }

    /**
     * @param string $reasonName Reason of the return. These are configured through the settings.
     * @return self
     */
    public function setReasonName(string $reasonName): self
    {
        $this->reasonName = $reasonName;
        $this->propertyFilled('reasonName');
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
     * @param string $currency ISO 4217 Currency Code.
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        $this->propertyFilled('currency');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\User $user Link to possible user resource associated with this return.
     * @return self
     */
    public function setUser(\JacobDeKeizer\Ccv\Models\Returns\Child\Resource\User $user): self
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
     * @param string $order Link to the order associated with this return.
     * @return self
     */
    public function setOrder(string $order): self
    {
        $this->order = $order;
        $this->propertyFilled('order');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Returns\Child\Resource\Returnrows $returnrows Products that are included in this return.
     * @return self
     */
    public function setReturnrows(\JacobDeKeizer\Ccv\Models\Returns\Child\Resource\Returnrows $returnrows): self
    {
        $this->returnrows = $returnrows;
        $this->propertyFilled('returnrows');
        return $this;
    }
}