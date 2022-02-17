<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Orders\Patch;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Patch implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     */
    private ?int $invoicenumber;

    /**
     * @var bool|null If the order is marked as paid.
     */
    private ?bool $paid;

    /**
     * @var bool|null If the order's safety deposit is returned to the customer.
     */
    private ?bool $safetyDepositReturned;

    /**
     * @var float|null Total shipping costs. If this order already has a value for this field, it will be overwritten.
     */
    private ?float $totalShipping;

    /**
     * @var float|null Extra price added to the order as an additional fee for paymethod costs. If this order already has a value for this field, it will be overwritten.
     */
    private ?float $paymethodCosts;

    /**
     * @var float|null Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero. If this order already has a value for this property, it will be overwritten.
     */
    private ?float $extraCosts;

    /**
     * @var string|null Description of the extra costs. This is visible on the invoice and only if extra_costs is not zero. If extra_costs is supplied, it's advised to fill this property.
     */
    private ?string $extraCostsDescription;

    /**
     * @var bool|null If taxes are calculated in the total price. If false, all taxes will be hidden.
     */
    private ?bool $taxesIncluded;

    /**
     * @var bool|null If order row prices contain taxes. Use this property to choose between an inc. VAT order and an ex. VAT order.
     */
    private ?bool $orderRowTaxesIncluded;

    /**
     * @var bool|null If shippingcosts are included in the total tax amount.
     */
    private ?bool $shippingTaxesIncluded;

    /**
     * @var bool|null Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     */
    private ?bool $isIntraCommunityOrder;

    /**
     * @var string|null ISO 4217 Currency Code
     */
    private ?string $currency;

    /**
     * @var bool|null Indicates that the order was placed via an external platform. Per EU tax regulations, this means that tax on all order rows must be 0%.
     */
    private ?bool $isPlatformSale;

    /**
     * @var string|null Language in which this order was ordered
     */
    private ?string $orderedinlng;

    /**
     * @var int|null Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     */
    private ?int $status;

    /**
     * @var string|null When the boolean 'mail' is set, the note will be appended to the email which is send to the customer.
     */
    private ?string $note;

    /**
     * @var string|null Track and Trace Code, supplied by shipping party. When the boolean 'mail' is set, the Track and Trace Code can be appended to the email which is send to the customer.
     */
    private ?string $trackAndTraceCode;

    /**
     * @var string|null Track & Trace Carrier. This value represents the shipping service.
     */
    private ?string $trackAndTraceCarrier;

    /**
     * @var bool|null If TRUE, notify the customer of the status change. Also see 'note' and 'track_and_trace_code'.
     */
    private ?bool $mail;

    /**
     * @var string|null Delivery date in UTC
     */
    private ?string $deliverDate;

    /**
     * @var string|null This is the deliver method the customer chooses during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     */
    private ?string $deliverMethod;

    /**
     * @var int|null Id for the takeout slot. If takeoutslot is used then deliver_method must be deliver or pickup
     */
    private ?int $takeoutslot;

    /**
     * @var string|null The reservation number for an order. This may be visible on the invoice
     */
    private ?string $reservationnumber;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input|null Describes personal information of the customer
     */
    private ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input $customer;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input[]|null Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    private ?array $orderrows;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     */
    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
    }

    /**
     * @return bool|null If the order is marked as paid.
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    /**
     * @return bool|null If the order's safety deposit is returned to the customer.
     */
    public function getSafetyDepositReturned(): ?bool
    {
        return $this->safetyDepositReturned;
    }

    /**
     * @return float|null Total shipping costs. If this order already has a value for this field, it will be overwritten.
     */
    public function getTotalShipping(): ?float
    {
        return $this->totalShipping;
    }

    /**
     * @return float|null Extra price added to the order as an additional fee for paymethod costs. If this order already has a value for this field, it will be overwritten.
     */
    public function getPaymethodCosts(): ?float
    {
        return $this->paymethodCosts;
    }

    /**
     * @return float|null Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero. If this order already has a value for this property, it will be overwritten.
     */
    public function getExtraCosts(): ?float
    {
        return $this->extraCosts;
    }

    /**
     * @return string|null Description of the extra costs. This is visible on the invoice and only if extra_costs is not zero. If extra_costs is supplied, it's advised to fill this property.
     */
    public function getExtraCostsDescription(): ?string
    {
        return $this->extraCostsDescription;
    }

    /**
     * @return bool|null If taxes are calculated in the total price. If false, all taxes will be hidden.
     */
    public function getTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    /**
     * @return bool|null If order row prices contain taxes. Use this property to choose between an inc. VAT order and an ex. VAT order.
     */
    public function getOrderRowTaxesIncluded(): ?bool
    {
        return $this->orderRowTaxesIncluded;
    }

    /**
     * @return bool|null If shippingcosts are included in the total tax amount.
     */
    public function getShippingTaxesIncluded(): ?bool
    {
        return $this->shippingTaxesIncluded;
    }

    /**
     * @return bool|null Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     */
    public function getIsIntraCommunityOrder(): ?bool
    {
        return $this->isIntraCommunityOrder;
    }

    /**
     * @return string|null ISO 4217 Currency Code
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @return bool|null Indicates that the order was placed via an external platform. Per EU tax regulations, this means that tax on all order rows must be 0%.
     */
    public function getIsPlatformSale(): ?bool
    {
        return $this->isPlatformSale;
    }

    /**
     * @return string|null Language in which this order was ordered
     */
    public function getOrderedinlng(): ?string
    {
        return $this->orderedinlng;
    }

    /**
     * @return int|null Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null When the boolean 'mail' is set, the note will be appended to the email which is send to the customer.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @return string|null Track and Trace Code, supplied by shipping party. When the boolean 'mail' is set, the Track and Trace Code can be appended to the email which is send to the customer.
     */
    public function getTrackAndTraceCode(): ?string
    {
        return $this->trackAndTraceCode;
    }

    /**
     * @return string|null Track & Trace Carrier. This value represents the shipping service.
     */
    public function getTrackAndTraceCarrier(): ?string
    {
        return $this->trackAndTraceCarrier;
    }

    /**
     * @return bool|null If TRUE, notify the customer of the status change. Also see 'note' and 'track_and_trace_code'.
     */
    public function getMail(): ?bool
    {
        return $this->mail;
    }

    /**
     * @return string|null Delivery date in UTC
     */
    public function getDeliverDate(): ?string
    {
        return $this->deliverDate;
    }

    /**
     * @return string|null This is the deliver method the customer chooses during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     */
    public function getDeliverMethod(): ?string
    {
        return $this->deliverMethod;
    }

    /**
     * @return int|null Id for the takeout slot. If takeoutslot is used then deliver_method must be deliver or pickup
     */
    public function getTakeoutslot(): ?int
    {
        return $this->takeoutslot;
    }

    /**
     * @return string|null The reservation number for an order. This may be visible on the invoice
     */
    public function getReservationnumber(): ?string
    {
        return $this->reservationnumber;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input|null Describes personal information of the customer
     */
    public function getCustomer(): ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input
    {
        return $this->customer;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input[]|null Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    public function getOrderrows(): ?array
    {
        return $this->orderrows;
    }

    /**
     * @param int|null $invoicenumber Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     * @return self
     */
    public function setInvoicenumber(?int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        return $this;
    }

    /**
     * @param bool|null $paid If the order is marked as paid.
     * @return self
     */
    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @param bool|null $safetyDepositReturned If the order's safety deposit is returned to the customer.
     * @return self
     */
    public function setSafetyDepositReturned(?bool $safetyDepositReturned): self
    {
        $this->safetyDepositReturned = $safetyDepositReturned;
        return $this;
    }

    /**
     * @param float|null $totalShipping Total shipping costs. If this order already has a value for this field, it will be overwritten.
     * @return self
     */
    public function setTotalShipping(?float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;
        return $this;
    }

    /**
     * @param float|null $paymethodCosts Extra price added to the order as an additional fee for paymethod costs. If this order already has a value for this field, it will be overwritten.
     * @return self
     */
    public function setPaymethodCosts(?float $paymethodCosts): self
    {
        $this->paymethodCosts = $paymethodCosts;
        return $this;
    }

    /**
     * @param float|null $extraCosts Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero. If this order already has a value for this property, it will be overwritten.
     * @return self
     */
    public function setExtraCosts(?float $extraCosts): self
    {
        $this->extraCosts = $extraCosts;
        return $this;
    }

    /**
     * @param string|null $extraCostsDescription Description of the extra costs. This is visible on the invoice and only if extra_costs is not zero. If extra_costs is supplied, it's advised to fill this property.
     * @return self
     */
    public function setExtraCostsDescription(?string $extraCostsDescription): self
    {
        $this->extraCostsDescription = $extraCostsDescription;
        return $this;
    }

    /**
     * @param bool|null $taxesIncluded If taxes are calculated in the total price. If false, all taxes will be hidden.
     * @return self
     */
    public function setTaxesIncluded(?bool $taxesIncluded): self
    {
        $this->taxesIncluded = $taxesIncluded;
        return $this;
    }

    /**
     * @param bool|null $orderRowTaxesIncluded If order row prices contain taxes. Use this property to choose between an inc. VAT order and an ex. VAT order.
     * @return self
     */
    public function setOrderRowTaxesIncluded(?bool $orderRowTaxesIncluded): self
    {
        $this->orderRowTaxesIncluded = $orderRowTaxesIncluded;
        return $this;
    }

    /**
     * @param bool|null $shippingTaxesIncluded If shippingcosts are included in the total tax amount.
     * @return self
     */
    public function setShippingTaxesIncluded(?bool $shippingTaxesIncluded): self
    {
        $this->shippingTaxesIncluded = $shippingTaxesIncluded;
        return $this;
    }

    /**
     * @param bool|null $isIntraCommunityOrder Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     * @return self
     */
    public function setIsIntraCommunityOrder(?bool $isIntraCommunityOrder): self
    {
        $this->isIntraCommunityOrder = $isIntraCommunityOrder;
        return $this;
    }

    /**
     * @param string|null $currency ISO 4217 Currency Code
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param bool|null $isPlatformSale Indicates that the order was placed via an external platform. Per EU tax regulations, this means that tax on all order rows must be 0%.
     * @return self
     */
    public function setIsPlatformSale(?bool $isPlatformSale): self
    {
        $this->isPlatformSale = $isPlatformSale;
        return $this;
    }

    /**
     * @param string|null $orderedinlng Language in which this order was ordered
     * @return self
     */
    public function setOrderedinlng(?string $orderedinlng): self
    {
        $this->orderedinlng = $orderedinlng;
        return $this;
    }

    /**
     * @param int|null $status Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $note When the boolean 'mail' is set, the note will be appended to the email which is send to the customer.
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @param string|null $trackAndTraceCode Track and Trace Code, supplied by shipping party. When the boolean 'mail' is set, the Track and Trace Code can be appended to the email which is send to the customer.
     * @return self
     */
    public function setTrackAndTraceCode(?string $trackAndTraceCode): self
    {
        $this->trackAndTraceCode = $trackAndTraceCode;
        return $this;
    }

    /**
     * @param string|null $trackAndTraceCarrier Track & Trace Carrier. This value represents the shipping service.
     * @return self
     */
    public function setTrackAndTraceCarrier(?string $trackAndTraceCarrier): self
    {
        $this->trackAndTraceCarrier = $trackAndTraceCarrier;
        return $this;
    }

    /**
     * @param bool|null $mail If TRUE, notify the customer of the status change. Also see 'note' and 'track_and_trace_code'.
     * @return self
     */
    public function setMail(?bool $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @param string|null $deliverDate Delivery date in UTC
     * @return self
     */
    public function setDeliverDate(?string $deliverDate): self
    {
        $this->deliverDate = $deliverDate;
        return $this;
    }

    /**
     * @param string|null $deliverMethod This is the deliver method the customer chooses during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     * @return self
     */
    public function setDeliverMethod(?string $deliverMethod): self
    {
        $this->deliverMethod = $deliverMethod;
        return $this;
    }

    /**
     * @param int|null $takeoutslot Id for the takeout slot. If takeoutslot is used then deliver_method must be deliver or pickup
     * @return self
     */
    public function setTakeoutslot(?int $takeoutslot): self
    {
        $this->takeoutslot = $takeoutslot;
        return $this;
    }

    /**
     * @param string|null $reservationnumber The reservation number for an order. This may be visible on the invoice
     * @return self
     */
    public function setReservationnumber(?string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input|null $customer Describes personal information of the customer
     * @return self
     */
    public function setCustomer(?\JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input|null ...$orderrows $orderrows Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     * @return self
     */
    public function setOrderrows(\JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input ...$orderrows): self
    {
        $this->orderrows = $orderrows;
        return $this;
    }
}