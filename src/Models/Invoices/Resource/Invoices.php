<?php

namespace JacobDeKeizer\Ccv\Models\Invoices\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Invoices implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var int Invoice id.
     */
    private $id;

    /**
     * @var string|null Prefix of the specific invoice number of the invoice. Automatically generated when the invoice is created.
     */
    private $invoicenumberPrefix;

    /**
     * @var int Invoice number, automatically generated when the invoice is created.
     */
    private $invoicenumber;

    /**
     * @var string Unique invoice number, Full invoicenumber as displayed in shop. With dash if the prefix is available.
     */
    private $invoicenumberFull;

    /**
     * @var string|null Prefix of the specific order number of the order that this invoice is part of. automatically generated when the invoice is created.
     */
    private $ordernumberPrefix;

    /**
     * @var int Order number of the order that this invoice is part of, automatically generated when the invoice is created.
     */
    private $ordernumber;

    /**
     * @var string Unique order number, Full ordernumber of the order that this invoice is part of as displayed in shop. With dash if the prefix is available.
     */
    private $ordernumberFull;

    /**
     * @var string Createdate of this invoice in UTC.
     */
    private $createDate;

    /**
     * @var string Status of the invoice. 1. paid. 2. upaid. 3. reimbursed.
     */
    private $status;

    /**
     * @var string The display name of the invoice status.
     */
    private $statusName;

    /**
     * @var string Type defines if it either an debit or credit invoice.
     */
    private $type;

    /**
     * @var string|null Date of when the payment link was send to the customer in UTC.
     */
    private $paymentLinkSent;

    /**
     * @var bool If true, then taxes are calculated in the total price. If false, all taxes will be hidden.
     */
    private $taxesIncluded;

    /**
     * @var bool If true, invoice row prices contain taxes.
     */
    private $invoiceRowTaxesIncluded;

    /**
     * @var bool Indicates if the invoice is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all invoice rows.
     */
    private $isIntraCommunityOrder;

    /**
     * @var bool If true, then shippingcosts are included in the total tax amount.
     */
    private $shippingTaxesIncluded;

    /**
     * @var float Tax percentage of the shipping costs.
     */
    private $shippingTaxPercentage;

    /**
     * @var float Total shipping costs.
     */
    private $totalShipping;

    /**
     * @var float Total discount on the invoice. This includes the discount of coupons if available.
     */
    private $totalDiscounts;

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
     * @var float Total tax amount on the invoice.
     */
    private $totalTax;

    /**
     * @var string ISO 4217 Currency Code.
     */
    private $currency;

    /**
     * @var string Payment option name.
     */
    private $extraPaymentOption;

    /**
     * @var float|null Payment option price.
     */
    private $extraPaymentOptionPrice;

    /**
     * @var float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'.
     */
    private $paymethodCosts;

    /**
     * @var string|null The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'.
     */
    private $creditPointDiscount;

    /**
     * @var float Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero.
     */
    private $extraCosts;

    /**
     * @var string Description of the extra costs. This is visible on the invoice.
     */
    private $extraCostsDescription;

    /**
     * @var string|null A reference to the invoice number at a third party.
     */
    private $externalReference;

    /**
     * @var string Direct invoice download link.
     */
    private $deeplink;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\User Link to possible user resource associated with this invoice.
     */
    private $user;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo Describes personal information of the customer
     */
    private $customer;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Discountcoupon Link to possible discount coupon associated with this invoice.
     */
    private $discountcoupon;

    /**
     * @var string|null Link to the order associated with this invoice.
     */
    private $order;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicerows Products that are included in this invoice.
     */
    private $invoicerows;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicenotifications Invoice notifications are used to send e-mails of the different types. For instance, an invoice can be sent to the customer. GET will return all previous notifications created by the API.
     */
    private $invoicenotifications;

    /**
     * @var string Deprecated. Direct invoice download link. Use the property 'deeplink' instead.
     */
    private $downloadLink;

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
     * @return int Invoice id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null Prefix of the specific invoice number of the invoice. Automatically generated when the invoice is created.
     */
    public function getInvoicenumberPrefix(): ?string
    {
        return $this->invoicenumberPrefix;
    }

    /**
     * @return int Invoice number, automatically generated when the invoice is created.
     */
    public function getInvoicenumber(): int
    {
        return $this->invoicenumber;
    }

    /**
     * @return string Unique invoice number, Full invoicenumber as displayed in shop. With dash if the prefix is available.
     */
    public function getInvoicenumberFull(): string
    {
        return $this->invoicenumberFull;
    }

    /**
     * @return string|null Prefix of the specific order number of the order that this invoice is part of. automatically generated when the invoice is created.
     */
    public function getOrdernumberPrefix(): ?string
    {
        return $this->ordernumberPrefix;
    }

    /**
     * @return int Order number of the order that this invoice is part of, automatically generated when the invoice is created.
     */
    public function getOrdernumber(): int
    {
        return $this->ordernumber;
    }

    /**
     * @return string Unique order number, Full ordernumber of the order that this invoice is part of as displayed in shop. With dash if the prefix is available.
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
     * @return string Status of the invoice. 1. paid. 2. upaid. 3. reimbursed.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string The display name of the invoice status.
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }

    /**
     * @return string Type defines if it either an debit or credit invoice.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null Date of when the payment link was send to the customer in UTC.
     */
    public function getPaymentLinkSent(): ?string
    {
        return $this->paymentLinkSent;
    }

    /**
     * @return bool If true, then taxes are calculated in the total price. If false, all taxes will be hidden.
     */
    public function getTaxesIncluded(): bool
    {
        return $this->taxesIncluded;
    }

    /**
     * @return bool If true, invoice row prices contain taxes.
     */
    public function getInvoiceRowTaxesIncluded(): bool
    {
        return $this->invoiceRowTaxesIncluded;
    }

    /**
     * @return bool Indicates if the invoice is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all invoice rows.
     */
    public function getIsIntraCommunityOrder(): bool
    {
        return $this->isIntraCommunityOrder;
    }

    /**
     * @return bool If true, then shippingcosts are included in the total tax amount.
     */
    public function getShippingTaxesIncluded(): bool
    {
        return $this->shippingTaxesIncluded;
    }

    /**
     * @return float Tax percentage of the shipping costs.
     */
    public function getShippingTaxPercentage(): float
    {
        return $this->shippingTaxPercentage;
    }

    /**
     * @return float Total shipping costs.
     */
    public function getTotalShipping(): float
    {
        return $this->totalShipping;
    }

    /**
     * @return float Total discount on the invoice. This includes the discount of coupons if available.
     */
    public function getTotalDiscounts(): float
    {
        return $this->totalDiscounts;
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
     * @return float Total tax amount on the invoice.
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
     * @return string Payment option name.
     */
    public function getExtraPaymentOption(): string
    {
        return $this->extraPaymentOption;
    }

    /**
     * @return float|null Payment option price.
     */
    public function getExtraPaymentOptionPrice(): ?float
    {
        return $this->extraPaymentOptionPrice;
    }

    /**
     * @return float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'.
     */
    public function getPaymethodCosts(): float
    {
        return $this->paymethodCosts;
    }

    /**
     * @return string|null The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'.
     */
    public function getCreditPointDiscount(): ?string
    {
        return $this->creditPointDiscount;
    }

    /**
     * @return float Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero.
     */
    public function getExtraCosts(): float
    {
        return $this->extraCosts;
    }

    /**
     * @return string Description of the extra costs. This is visible on the invoice.
     */
    public function getExtraCostsDescription(): string
    {
        return $this->extraCostsDescription;
    }

    /**
     * @return string|null A reference to the invoice number at a third party.
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    /**
     * @return string Direct invoice download link.
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\User Link to possible user resource associated with this invoice.
     */
    public function getUser(): \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\User
    {
        return $this->user;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo Describes personal information of the customer
     */
    public function getCustomer(): \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo
    {
        return $this->customer;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Discountcoupon Link to possible discount coupon associated with this invoice.
     */
    public function getDiscountcoupon(): \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Discountcoupon
    {
        return $this->discountcoupon;
    }

    /**
     * @return string|null Link to the order associated with this invoice.
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicerows Products that are included in this invoice.
     */
    public function getInvoicerows(): \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicerows
    {
        return $this->invoicerows;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicenotifications Invoice notifications are used to send e-mails of the different types. For instance, an invoice can be sent to the customer. GET will return all previous notifications created by the API.
     */
    public function getInvoicenotifications(): \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicenotifications
    {
        return $this->invoicenotifications;
    }

    /**
     * @return string Deprecated. Direct invoice download link. Use the property 'deeplink' instead.
     */
    public function getDownloadLink(): string
    {
        return $this->downloadLink;
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
     * @param int $id Invoice id.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $invoicenumberPrefix Prefix of the specific invoice number of the invoice. Automatically generated when the invoice is created.
     * @return self
     */
    public function setInvoicenumberPrefix(?string $invoicenumberPrefix): self
    {
        $this->invoicenumberPrefix = $invoicenumberPrefix;
        $this->propertyFilled('invoicenumberPrefix');
        return $this;
    }

    /**
     * @param int $invoicenumber Invoice number, automatically generated when the invoice is created.
     * @return self
     */
    public function setInvoicenumber(int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        $this->propertyFilled('invoicenumber');
        return $this;
    }

    /**
     * @param string $invoicenumberFull Unique invoice number, Full invoicenumber as displayed in shop. With dash if the prefix is available.
     * @return self
     */
    public function setInvoicenumberFull(string $invoicenumberFull): self
    {
        $this->invoicenumberFull = $invoicenumberFull;
        $this->propertyFilled('invoicenumberFull');
        return $this;
    }

    /**
     * @param string|null $ordernumberPrefix Prefix of the specific order number of the order that this invoice is part of. automatically generated when the invoice is created.
     * @return self
     */
    public function setOrdernumberPrefix(?string $ordernumberPrefix): self
    {
        $this->ordernumberPrefix = $ordernumberPrefix;
        $this->propertyFilled('ordernumberPrefix');
        return $this;
    }

    /**
     * @param int $ordernumber Order number of the order that this invoice is part of, automatically generated when the invoice is created.
     * @return self
     */
    public function setOrdernumber(int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        $this->propertyFilled('ordernumber');
        return $this;
    }

    /**
     * @param string $ordernumberFull Unique order number, Full ordernumber of the order that this invoice is part of as displayed in shop. With dash if the prefix is available.
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
     * @param string $status Status of the invoice. 1. paid. 2. upaid. 3. reimbursed.
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }

    /**
     * @param string $statusName The display name of the invoice status.
     * @return self
     */
    public function setStatusName(string $statusName): self
    {
        $this->statusName = $statusName;
        $this->propertyFilled('statusName');
        return $this;
    }

    /**
     * @param string $type Type defines if it either an debit or credit invoice.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string|null $paymentLinkSent Date of when the payment link was send to the customer in UTC.
     * @return self
     */
    public function setPaymentLinkSent(?string $paymentLinkSent): self
    {
        $this->paymentLinkSent = $paymentLinkSent;
        $this->propertyFilled('paymentLinkSent');
        return $this;
    }

    /**
     * @param bool $taxesIncluded If true, then taxes are calculated in the total price. If false, all taxes will be hidden.
     * @return self
     */
    public function setTaxesIncluded(bool $taxesIncluded): self
    {
        $this->taxesIncluded = $taxesIncluded;
        $this->propertyFilled('taxesIncluded');
        return $this;
    }

    /**
     * @param bool $invoiceRowTaxesIncluded If true, invoice row prices contain taxes.
     * @return self
     */
    public function setInvoiceRowTaxesIncluded(bool $invoiceRowTaxesIncluded): self
    {
        $this->invoiceRowTaxesIncluded = $invoiceRowTaxesIncluded;
        $this->propertyFilled('invoiceRowTaxesIncluded');
        return $this;
    }

    /**
     * @param bool $isIntraCommunityOrder Indicates if the invoice is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all invoice rows.
     * @return self
     */
    public function setIsIntraCommunityOrder(bool $isIntraCommunityOrder): self
    {
        $this->isIntraCommunityOrder = $isIntraCommunityOrder;
        $this->propertyFilled('isIntraCommunityOrder');
        return $this;
    }

    /**
     * @param bool $shippingTaxesIncluded If true, then shippingcosts are included in the total tax amount.
     * @return self
     */
    public function setShippingTaxesIncluded(bool $shippingTaxesIncluded): self
    {
        $this->shippingTaxesIncluded = $shippingTaxesIncluded;
        $this->propertyFilled('shippingTaxesIncluded');
        return $this;
    }

    /**
     * @param float $shippingTaxPercentage Tax percentage of the shipping costs.
     * @return self
     */
    public function setShippingTaxPercentage(float $shippingTaxPercentage): self
    {
        $this->shippingTaxPercentage = $shippingTaxPercentage;
        $this->propertyFilled('shippingTaxPercentage');
        return $this;
    }

    /**
     * @param float $totalShipping Total shipping costs.
     * @return self
     */
    public function setTotalShipping(float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;
        $this->propertyFilled('totalShipping');
        return $this;
    }

    /**
     * @param float $totalDiscounts Total discount on the invoice. This includes the discount of coupons if available.
     * @return self
     */
    public function setTotalDiscounts(float $totalDiscounts): self
    {
        $this->totalDiscounts = $totalDiscounts;
        $this->propertyFilled('totalDiscounts');
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
     * @param float $totalTax Total tax amount on the invoice.
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
     * @param string $extraPaymentOption Payment option name.
     * @return self
     */
    public function setExtraPaymentOption(string $extraPaymentOption): self
    {
        $this->extraPaymentOption = $extraPaymentOption;
        $this->propertyFilled('extraPaymentOption');
        return $this;
    }

    /**
     * @param float|null $extraPaymentOptionPrice Payment option price.
     * @return self
     */
    public function setExtraPaymentOptionPrice(?float $extraPaymentOptionPrice): self
    {
        $this->extraPaymentOptionPrice = $extraPaymentOptionPrice;
        $this->propertyFilled('extraPaymentOptionPrice');
        return $this;
    }

    /**
     * @param float $paymethodCosts Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'.
     * @return self
     */
    public function setPaymethodCosts(float $paymethodCosts): self
    {
        $this->paymethodCosts = $paymethodCosts;
        $this->propertyFilled('paymethodCosts');
        return $this;
    }

    /**
     * @param string|null $creditPointDiscount The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'.
     * @return self
     */
    public function setCreditPointDiscount(?string $creditPointDiscount): self
    {
        $this->creditPointDiscount = $creditPointDiscount;
        $this->propertyFilled('creditPointDiscount');
        return $this;
    }

    /**
     * @param float $extraCosts Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero.
     * @return self
     */
    public function setExtraCosts(float $extraCosts): self
    {
        $this->extraCosts = $extraCosts;
        $this->propertyFilled('extraCosts');
        return $this;
    }

    /**
     * @param string $extraCostsDescription Description of the extra costs. This is visible on the invoice.
     * @return self
     */
    public function setExtraCostsDescription(string $extraCostsDescription): self
    {
        $this->extraCostsDescription = $extraCostsDescription;
        $this->propertyFilled('extraCostsDescription');
        return $this;
    }

    /**
     * @param string|null $externalReference A reference to the invoice number at a third party.
     * @return self
     */
    public function setExternalReference(?string $externalReference): self
    {
        $this->externalReference = $externalReference;
        $this->propertyFilled('externalReference');
        return $this;
    }

    /**
     * @param string $deeplink Direct invoice download link.
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\User $user Link to possible user resource associated with this invoice.
     * @return self
     */
    public function setUser(\JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\User $user): self
    {
        $this->user = $user;
        $this->propertyFilled('user');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo $customer Describes personal information of the customer
     * @return self
     */
    public function setCustomer(\JacobDeKeizer\Ccv\Models\Invoices\Entity\Personalinfo $customer): self
    {
        $this->customer = $customer;
        $this->propertyFilled('customer');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Discountcoupon $discountcoupon Link to possible discount coupon associated with this invoice.
     * @return self
     */
    public function setDiscountcoupon(\JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Discountcoupon $discountcoupon): self
    {
        $this->discountcoupon = $discountcoupon;
        $this->propertyFilled('discountcoupon');
        return $this;
    }

    /**
     * @param string|null $order Link to the order associated with this invoice.
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;
        $this->propertyFilled('order');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicerows $invoicerows Products that are included in this invoice.
     * @return self
     */
    public function setInvoicerows(\JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicerows $invoicerows): self
    {
        $this->invoicerows = $invoicerows;
        $this->propertyFilled('invoicerows');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicenotifications $invoicenotifications Invoice notifications are used to send e-mails of the different types. For instance, an invoice can be sent to the customer. GET will return all previous notifications created by the API.
     * @return self
     */
    public function setInvoicenotifications(\JacobDeKeizer\Ccv\Models\Invoices\Child\Resource\Invoicenotifications $invoicenotifications): self
    {
        $this->invoicenotifications = $invoicenotifications;
        $this->propertyFilled('invoicenotifications');
        return $this;
    }

    /**
     * @param string $downloadLink Deprecated. Direct invoice download link. Use the property 'deeplink' instead.
     * @return self
     */
    public function setDownloadLink(string $downloadLink): self
    {
        $this->downloadLink = $downloadLink;
        $this->propertyFilled('downloadLink');
        return $this;
    }
}
