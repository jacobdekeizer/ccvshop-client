<?php

namespace JacobDeKeizer\Ccv\Models\Resource\Orders;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     */
     private $invoicenumber;

    /**
     * @var bool|null If false, the order won't be marked as completed. The basket_href and checkout_href will be available for this resource. The consumer can be forwarded to these urls and complete the order. By default this value is TRUE.
     */
     private $isCompleted;

    /**
     * @var bool|null If the order is marked as paid
     */
     private $paid;

    /**
     * @var bool|null If the order's safety deposit is returned to the customer.
     */
     private $safetyDepositReturned;

    /**
     * @var float|null Total shipping costs
     */
     private $totalShipping;

    /**
     * @var float|null Extra price added to the order as an additional fee for paymethod costs. If this order already has a value for this field, it will be overwritten.
     */
     private $paymethodCosts;

    /**
     * @var float|null Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero.
     */
     private $extraCosts;

    /**
     * @var string|null Description of the extra costs. This is visible on the invoice.
     */
     private $extraCostsDescription;

    /**
     * @var bool|null If taxes are calculated in the total price. If false, all taxes will be hidden.
     */
     private $taxesIncluded;

    /**
     * @var bool|null If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
     */
     private $orderRowTaxesIncluded;

    /**
     * @var bool|null If shippingcosts are included in the total tax amount
     */
     private $shippingTaxesIncluded;

    /**
     * @var bool|null Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     */
     private $isIntraCommunityOrder;

    /**
     * @var string|null ISO 4217 Currency Code
     */
     private $currency;

    /**
     * @var string|null Language in which this order was ordered
     */
     private $orderedinlng;

    /**
     * @var int|null Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     */
     private $status;

    /**
     * @var string|null Track and Trace code, usually provided by the shipping service. If a note is emailed to the customer this value will be included.
     */
     private $trackAndTraceCode;

    /**
     * @var string|null Track & Trace Carrier. This value represents the shipping service.
     */
     private $trackAndTraceCarrier;

    /**
     * @var string|null Delivery date in UTC
     */
     private $deliverDate;

    /**
     * @var string|null This is the deliver method the customer chooses during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     */
     private $deliverMethod;

    /**
     * @var int|null Id for the takeout slot. If takeoutslot is used then deliver_method must be deliver or pickup
     */
     private $takeoutslot;

    /**
     * @var string|null The reservation number for an order. This may be visible on the invoice
     */
     private $reservationnumber;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Input Describes personal information of the customer
     */
     private $customer;

    /**
     * @var int|null Unique id of the user (see GET /:version/users). The user's personal info will be added to this order. If additional information is provided in the property 'customer' that info will override this. If null, no user will be associated with this order.
     */
     private $userId;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Entity\Orderrow\Input[] Describes a collection of order rows. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
     private $orderrows;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     */
    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
    }

    /**
     * @return bool|null If false, the order won't be marked as completed. The basket_href and checkout_href will be available for this resource. The consumer can be forwarded to these urls and complete the order. By default this value is TRUE.
     */
    public function getIsCompleted(): ?bool
    {
        return $this->isCompleted;
    }

    /**
     * @return bool|null If the order is marked as paid
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
     * @return float|null Total shipping costs
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
     * @return float|null Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero.
     */
    public function getExtraCosts(): ?float
    {
        return $this->extraCosts;
    }

    /**
     * @return string|null Description of the extra costs. This is visible on the invoice.
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
     * @return bool|null If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
     */
    public function getOrderRowTaxesIncluded(): ?bool
    {
        return $this->orderRowTaxesIncluded;
    }

    /**
     * @return bool|null If shippingcosts are included in the total tax amount
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
     * @return string|null Track and Trace code, usually provided by the shipping service. If a note is emailed to the customer this value will be included.
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
     * @return \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Input Describes personal information of the customer
     */
    public function getCustomer(): \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Input
    {
        return $this->customer;
    }

    /**
     * @return int|null Unique id of the user (see GET /:version/users). The user's personal info will be added to this order. If additional information is provided in the property 'customer' that info will override this. If null, no user will be associated with this order.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Entity\Orderrow\Input[] Describes a collection of order rows. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    public function getOrderrows(): array
    {
        return $this->orderrows;
    }

    /**
     * @param int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     * @return self
     */
    public function setInvoicenumber(?int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        $this->propertyFilled('invoicenumber');
        return $this;
    }

    /**
     * @param bool|null If false, the order won't be marked as completed. The basket_href and checkout_href will be available for this resource. The consumer can be forwarded to these urls and complete the order. By default this value is TRUE.
     * @return self
     */
    public function setIsCompleted(?bool $isCompleted): self
    {
        $this->isCompleted = $isCompleted;
        $this->propertyFilled('isCompleted');
        return $this;
    }

    /**
     * @param bool|null If the order is marked as paid
     * @return self
     */
    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;
        $this->propertyFilled('paid');
        return $this;
    }

    /**
     * @param bool|null If the order's safety deposit is returned to the customer.
     * @return self
     */
    public function setSafetyDepositReturned(?bool $safetyDepositReturned): self
    {
        $this->safetyDepositReturned = $safetyDepositReturned;
        $this->propertyFilled('safetyDepositReturned');
        return $this;
    }

    /**
     * @param float|null Total shipping costs
     * @return self
     */
    public function setTotalShipping(?float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;
        $this->propertyFilled('totalShipping');
        return $this;
    }

    /**
     * @param float|null Extra price added to the order as an additional fee for paymethod costs. If this order already has a value for this field, it will be overwritten.
     * @return self
     */
    public function setPaymethodCosts(?float $paymethodCosts): self
    {
        $this->paymethodCosts = $paymethodCosts;
        $this->propertyFilled('paymethodCosts');
        return $this;
    }

    /**
     * @param float|null Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero.
     * @return self
     */
    public function setExtraCosts(?float $extraCosts): self
    {
        $this->extraCosts = $extraCosts;
        $this->propertyFilled('extraCosts');
        return $this;
    }

    /**
     * @param string|null Description of the extra costs. This is visible on the invoice.
     * @return self
     */
    public function setExtraCostsDescription(?string $extraCostsDescription): self
    {
        $this->extraCostsDescription = $extraCostsDescription;
        $this->propertyFilled('extraCostsDescription');
        return $this;
    }

    /**
     * @param bool|null If taxes are calculated in the total price. If false, all taxes will be hidden.
     * @return self
     */
    public function setTaxesIncluded(?bool $taxesIncluded): self
    {
        $this->taxesIncluded = $taxesIncluded;
        $this->propertyFilled('taxesIncluded');
        return $this;
    }

    /**
     * @param bool|null If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
     * @return self
     */
    public function setOrderRowTaxesIncluded(?bool $orderRowTaxesIncluded): self
    {
        $this->orderRowTaxesIncluded = $orderRowTaxesIncluded;
        $this->propertyFilled('orderRowTaxesIncluded');
        return $this;
    }

    /**
     * @param bool|null If shippingcosts are included in the total tax amount
     * @return self
     */
    public function setShippingTaxesIncluded(?bool $shippingTaxesIncluded): self
    {
        $this->shippingTaxesIncluded = $shippingTaxesIncluded;
        $this->propertyFilled('shippingTaxesIncluded');
        return $this;
    }

    /**
     * @param bool|null Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     * @return self
     */
    public function setIsIntraCommunityOrder(?bool $isIntraCommunityOrder): self
    {
        $this->isIntraCommunityOrder = $isIntraCommunityOrder;
        $this->propertyFilled('isIntraCommunityOrder');
        return $this;
    }

    /**
     * @param string|null ISO 4217 Currency Code
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        $this->propertyFilled('currency');
        return $this;
    }

    /**
     * @param string|null Language in which this order was ordered
     * @return self
     */
    public function setOrderedinlng(?string $orderedinlng): self
    {
        $this->orderedinlng = $orderedinlng;
        $this->propertyFilled('orderedinlng');
        return $this;
    }

    /**
     * @param int|null Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }

    /**
     * @param string|null Track and Trace code, usually provided by the shipping service. If a note is emailed to the customer this value will be included.
     * @return self
     */
    public function setTrackAndTraceCode(?string $trackAndTraceCode): self
    {
        $this->trackAndTraceCode = $trackAndTraceCode;
        $this->propertyFilled('trackAndTraceCode');
        return $this;
    }

    /**
     * @param string|null Track & Trace Carrier. This value represents the shipping service.
     * @return self
     */
    public function setTrackAndTraceCarrier(?string $trackAndTraceCarrier): self
    {
        $this->trackAndTraceCarrier = $trackAndTraceCarrier;
        $this->propertyFilled('trackAndTraceCarrier');
        return $this;
    }

    /**
     * @param string|null Delivery date in UTC
     * @return self
     */
    public function setDeliverDate(?string $deliverDate): self
    {
        $this->deliverDate = $deliverDate;
        $this->propertyFilled('deliverDate');
        return $this;
    }

    /**
     * @param string|null This is the deliver method the customer chooses during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     * @return self
     */
    public function setDeliverMethod(?string $deliverMethod): self
    {
        $this->deliverMethod = $deliverMethod;
        $this->propertyFilled('deliverMethod');
        return $this;
    }

    /**
     * @param int|null Id for the takeout slot. If takeoutslot is used then deliver_method must be deliver or pickup
     * @return self
     */
    public function setTakeoutslot(?int $takeoutslot): self
    {
        $this->takeoutslot = $takeoutslot;
        $this->propertyFilled('takeoutslot');
        return $this;
    }

    /**
     * @param string|null The reservation number for an order. This may be visible on the invoice
     * @return self
     */
    public function setReservationnumber(?string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        $this->propertyFilled('reservationnumber');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Input Describes personal information of the customer
     * @return self
     */
    public function setCustomer(\JacobDeKeizer\Ccv\Models\Entity\Personalinfo\Input $customer): self
    {
        $this->customer = $customer;
        $this->propertyFilled('customer');
        return $this;
    }

    /**
     * @param int|null Unique id of the user (see GET /:version/users). The user's personal info will be added to this order. If additional information is provided in the property 'customer' that info will override this. If null, no user will be associated with this order.
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        $this->propertyFilled('userId');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Entity\Orderrow\Input[] Describes a collection of order rows. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     * @return self
     */
    public function setOrderrows(array $orderrows): self
    {
        $this->orderrows = $orderrows;
        $this->propertyFilled('orderrows');
        return $this;
    }
}
