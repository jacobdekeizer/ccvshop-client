<?php

namespace JacobDeKeizer\Ccv\Models\Orders\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orders implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Order id
     */
    private $id;

    /**
     * @var string|null Prefix of the specific order number of the order. Automatically generated when the order is completed. This will be null when 'is_completed' is false.
     */
    private $ordernumberPrefix;

    /**
     * @var int|null Order number, automatically generated when the order is completed. This will be null when 'is_completed' is false.
     */
    private $ordernumber;

    /**
     * @var string|null Unique order number, Full order number as displayed in shop. With dash if the prefix is available. This will be null when 'is_completed' is false.
     */
    private $ordernumberFull;

    /**
     * @var int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     */
    private $invoicenumber;

    /**
     * @var string|null The most recent transaction id. Transaction Ids are normally provided by external Payment Service Providers. If an order has multiple transaction, this value is overwritten. If it has no transactions or if the PSP doens't provide an Id this is NULL.
     */
    private $transactionId;

    /**
     * @var string Createdate of this order in UTC
     */
    private $createDate;

    /**
     * @var string This is the deliver method the customer has chosen during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     */
    private $deliverMethod;

    /**
     * @var string|null Delivery date in UTC. In case of take out, see take_out_slot.
     */
    private $deliverDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\TakeOutWindow Contains info on the window chosen by the the customer during the checkout. Will only be filled if delivery_method is delivery or pickup.
     */
    private $takeOutWindow;

    /**
     * @var string Language in which this order was ordered
     */
    private $orderedinlng;

    /**
     * @var int|null Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     */
    private $status;

    /**
     * @var bool|null If status is null 'is_completed' will be false. If false, the order hasn't been completed by the customer.
     */
    private $isCompleted;

    /**
     * @var string|null Link to the shopping basket, only available when 'is_completed' is false.
     */
    private $basketHref;

    /**
     * @var string|null Link to the checkout page, only available when 'is_completed' is false. If the shop has the regular checkout, this will be the basket_href.
     */
    private $checkoutHref;

    /**
     * @var bool If the order is marked as paid
     */
    private $paid;

    /**
     * @var bool If the order's safety deposit is returned to the customer.
     */
    private $safetyDepositReturned;

    /**
     * @var int Paymethod Id of the order. Corresponse with the resource paymethods.
     */
    private $paymethodId;

    /**
     * @var string Paymethod of the order
     */
    private $paymethod;

    /**
     * @var bool If taxes are calculated in the total price. If false, all taxes will be hidden.
     */
    private $taxesIncluded;

    /**
     * @var bool If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
     */
    private $orderRowTaxesIncluded;

    /**
     * @var bool If shippingcosts are included in the total tax amount
     */
    private $shippingTaxesIncluded;

    /**
     * @var float Tax percentage of the shipping costs
     */
    private $shippingTaxPercentage;

    /**
     * @var bool Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     */
    private $isIntraCommunityOrder;

    /**
     * @var float Total orderrow price
     */
    private $totalOrderrowPrice;

    /**
     * @var float Total shipping costs
     */
    private $totalShipping;

    /**
     * @var float Total discount
     */
    private $totalDiscounts;

    /**
     * @var float Total price
     */
    private $totalPrice;

    /**
     * @var string ISO 4217 Currency Code
     */
    private $currency;

    /**
     * @var float Total tax amount
     */
    private $totalTax;

    /**
     * @var float Total weight of the order in kilograms
     */
    private $totalWeight;

    /**
     * @var string Payment option name
     */
    private $extraPaymentOption;

    /**
     * @var float|null Payment option price
     */
    private $extraPaymentOptionPrice;

    /**
     * @var bool If shipping was free with this payment option
     */
    private $extraPaymentOptionNoSentprice;

    /**
     * @var bool If this order will be paid on pickup with this payment option
     */
    private $extraPaymentOptionPayOnPickup;

    /**
     * @var float Deprecated. Extra price added to the order as an additional fee for paymethod costs and the discount from turning in credits. See 'paymethod_costs' and 'credit_point_discount'
     */
    private $extraPrice;

    /**
     * @var float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'
     */
    private $paymethodCosts;

    /**
     * @var float The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'
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
     * @var string Track & Trace code
     */
    private $trackAndTraceCode;

    /**
     * @var string|null Track & Trace Carrier. This value represents the shipping service.
     */
    private $trackAndTraceCarrier;

    /**
     * @var string Track & Trace deeplink. This links to the shipping carrier status page.
     */
    private $trackAndTraceDeeplink;

    /**
     * @var string|null The reservation number for an order. This may be visible on the invoice
     */
    private $reservationnumber;

    /**
     * @var string|null The delivery option the customer selected, when PG or PGE is chosen the property pickup_address is filled with the pickup address. DHDLE may be applicable to German users who ordered using the DHL Checkout.
     */
    private $deliveryOption;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\User Link to possible user resource associated with this order
     */
    private $user;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Discountcoupon Link to possible discount coupon associated with this order
     */
    private $discountcoupon;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Entity\Personalinfo|null Describes personal information of the customer
     */
    private $customer;

    /**
     * @var object|null The pickup address that the customer selected
     */
    private $pickupAddress;

    /**
     * @var string|null Deeplink to download the pdf packing slip. This will be null on uncompleted orders.
     */
    private $packingSlipDeeplink;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderrows Products that are ordered with this order
     */
    private $orderrows;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotes Notes added to this order
     */
    private $ordernotes;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordermessages Messages sent to the customer
     */
    private $ordermessages;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotifications Order notifications are used to send e-mails of the different types. For instance, an order's invoice can be sent to the customer. GET will return all previous notifications created by the API. For now, notifications created automatically or by the merchant will not show up in the collections.
     */
    private $ordernotifications;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderaffiliatenetworks Affilate networks
     */
    private $orderaffiliatenetworks;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderlabels|null Order labels
     */
    private $orderlabels;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Invoices Invoices used for creating a new invoice.
     */
    private $invoices;

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
     * @return int Order id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null Prefix of the specific order number of the order. Automatically generated when the order is completed. This will be null when 'is_completed' is false.
     */
    public function getOrdernumberPrefix(): ?string
    {
        return $this->ordernumberPrefix;
    }

    /**
     * @return int|null Order number, automatically generated when the order is completed. This will be null when 'is_completed' is false.
     */
    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    /**
     * @return string|null Unique order number, Full order number as displayed in shop. With dash if the prefix is available. This will be null when 'is_completed' is false.
     */
    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    /**
     * @return int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     */
    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
    }

    /**
     * @return string|null The most recent transaction id. Transaction Ids are normally provided by external Payment Service Providers. If an order has multiple transaction, this value is overwritten. If it has no transactions or if the PSP doens't provide an Id this is NULL.
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @return string Createdate of this order in UTC
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * @return string This is the deliver method the customer has chosen during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     */
    public function getDeliverMethod(): string
    {
        return $this->deliverMethod;
    }

    /**
     * @return string|null Delivery date in UTC. In case of take out, see take_out_slot.
     */
    public function getDeliverDate(): ?string
    {
        return $this->deliverDate;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\TakeOutWindow Contains info on the window chosen by the the customer during the checkout. Will only be filled if delivery_method is delivery or pickup.
     */
    public function getTakeOutWindow(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\TakeOutWindow
    {
        return $this->takeOutWindow;
    }

    /**
     * @return string Language in which this order was ordered
     */
    public function getOrderedinlng(): string
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
     * @return bool|null If status is null 'is_completed' will be false. If false, the order hasn't been completed by the customer.
     */
    public function getIsCompleted(): ?bool
    {
        return $this->isCompleted;
    }

    /**
     * @return string|null Link to the shopping basket, only available when 'is_completed' is false.
     */
    public function getBasketHref(): ?string
    {
        return $this->basketHref;
    }

    /**
     * @return string|null Link to the checkout page, only available when 'is_completed' is false. If the shop has the regular checkout, this will be the basket_href.
     */
    public function getCheckoutHref(): ?string
    {
        return $this->checkoutHref;
    }

    /**
     * @return bool If the order is marked as paid
     */
    public function getPaid(): bool
    {
        return $this->paid;
    }

    /**
     * @return bool If the order's safety deposit is returned to the customer.
     */
    public function getSafetyDepositReturned(): bool
    {
        return $this->safetyDepositReturned;
    }

    /**
     * @return int Paymethod Id of the order. Corresponse with the resource paymethods.
     */
    public function getPaymethodId(): int
    {
        return $this->paymethodId;
    }

    /**
     * @return string Paymethod of the order
     */
    public function getPaymethod(): string
    {
        return $this->paymethod;
    }

    /**
     * @return bool If taxes are calculated in the total price. If false, all taxes will be hidden.
     */
    public function getTaxesIncluded(): bool
    {
        return $this->taxesIncluded;
    }

    /**
     * @return bool If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
     */
    public function getOrderRowTaxesIncluded(): bool
    {
        return $this->orderRowTaxesIncluded;
    }

    /**
     * @return bool If shippingcosts are included in the total tax amount
     */
    public function getShippingTaxesIncluded(): bool
    {
        return $this->shippingTaxesIncluded;
    }

    /**
     * @return float Tax percentage of the shipping costs
     */
    public function getShippingTaxPercentage(): float
    {
        return $this->shippingTaxPercentage;
    }

    /**
     * @return bool Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     */
    public function getIsIntraCommunityOrder(): bool
    {
        return $this->isIntraCommunityOrder;
    }

    /**
     * @return float Total orderrow price
     */
    public function getTotalOrderrowPrice(): float
    {
        return $this->totalOrderrowPrice;
    }

    /**
     * @return float Total shipping costs
     */
    public function getTotalShipping(): float
    {
        return $this->totalShipping;
    }

    /**
     * @return float Total discount
     */
    public function getTotalDiscounts(): float
    {
        return $this->totalDiscounts;
    }

    /**
     * @return float Total price
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @return string ISO 4217 Currency Code
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return float Total tax amount
     */
    public function getTotalTax(): float
    {
        return $this->totalTax;
    }

    /**
     * @return float Total weight of the order in kilograms
     */
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }

    /**
     * @return string Payment option name
     */
    public function getExtraPaymentOption(): string
    {
        return $this->extraPaymentOption;
    }

    /**
     * @return float|null Payment option price
     */
    public function getExtraPaymentOptionPrice(): ?float
    {
        return $this->extraPaymentOptionPrice;
    }

    /**
     * @return bool If shipping was free with this payment option
     */
    public function getExtraPaymentOptionNoSentprice(): bool
    {
        return $this->extraPaymentOptionNoSentprice;
    }

    /**
     * @return bool If this order will be paid on pickup with this payment option
     */
    public function getExtraPaymentOptionPayOnPickup(): bool
    {
        return $this->extraPaymentOptionPayOnPickup;
    }

    /**
     * @return float Deprecated. Extra price added to the order as an additional fee for paymethod costs and the discount from turning in credits. See 'paymethod_costs' and 'credit_point_discount'
     * @deprecated See 'paymethod_costs' and 'credit_point_discount'
     */
    public function getExtraPrice(): float
    {
        return $this->extraPrice;
    }

    /**
     * @return float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'
     */
    public function getPaymethodCosts(): float
    {
        return $this->paymethodCosts;
    }

    /**
     * @return float The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'
     */
    public function getCreditPointDiscount(): float
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
     * @return string Track & Trace code
     */
    public function getTrackAndTraceCode(): string
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
     * @return string Track & Trace deeplink. This links to the shipping carrier status page.
     */
    public function getTrackAndTraceDeeplink(): string
    {
        return $this->trackAndTraceDeeplink;
    }

    /**
     * @return string|null The reservation number for an order. This may be visible on the invoice
     */
    public function getReservationnumber(): ?string
    {
        return $this->reservationnumber;
    }

    /**
     * @return string|null The delivery option the customer selected, when PG or PGE is chosen the property pickup_address is filled with the pickup address. DHDLE may be applicable to German users who ordered using the DHL Checkout.
     */
    public function getDeliveryOption(): ?string
    {
        return $this->deliveryOption;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\User Link to possible user resource associated with this order
     */
    public function getUser(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\User
    {
        return $this->user;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Discountcoupon Link to possible discount coupon associated with this order
     */
    public function getDiscountcoupon(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Discountcoupon
    {
        return $this->discountcoupon;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Entity\Personalinfo|null Describes personal information of the customer
     */
    public function getCustomer(): ?\JacobDeKeizer\Ccv\Models\Orders\Entity\Personalinfo
    {
        return $this->customer;
    }

    /**
     * @return object|null The pickup address that the customer selected
     */
    public function getPickupAddress(): ?object
    {
        return $this->pickupAddress;
    }

    /**
     * @return string|null Deeplink to download the pdf packing slip. This will be null on uncompleted orders.
     */
    public function getPackingSlipDeeplink(): ?string
    {
        return $this->packingSlipDeeplink;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderrows Products that are ordered with this order
     */
    public function getOrderrows(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderrows
    {
        return $this->orderrows;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotes Notes added to this order
     */
    public function getOrdernotes(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotes
    {
        return $this->ordernotes;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordermessages Messages sent to the customer
     */
    public function getOrdermessages(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordermessages
    {
        return $this->ordermessages;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotifications Order notifications are used to send e-mails of the different types. For instance, an order's invoice can be sent to the customer. GET will return all previous notifications created by the API. For now, notifications created automatically or by the merchant will not show up in the collections.
     */
    public function getOrdernotifications(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotifications
    {
        return $this->ordernotifications;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderaffiliatenetworks Affilate networks
     */
    public function getOrderaffiliatenetworks(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderaffiliatenetworks
    {
        return $this->orderaffiliatenetworks;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderlabels|null Order labels
     */
    public function getOrderlabels(): ?\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderlabels
    {
        return $this->orderlabels;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Invoices Invoices used for creating a new invoice.
     */
    public function getInvoices(): \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Invoices
    {
        return $this->invoices;
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
     * @param int $id Order id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $ordernumberPrefix Prefix of the specific order number of the order. Automatically generated when the order is completed. This will be null when 'is_completed' is false.
     * @return self
     */
    public function setOrdernumberPrefix(?string $ordernumberPrefix): self
    {
        $this->ordernumberPrefix = $ordernumberPrefix;
        $this->propertyFilled('ordernumberPrefix');
        return $this;
    }

    /**
     * @param int|null $ordernumber Order number, automatically generated when the order is completed. This will be null when 'is_completed' is false.
     * @return self
     */
    public function setOrdernumber(?int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        $this->propertyFilled('ordernumber');
        return $this;
    }

    /**
     * @param string|null $ordernumberFull Unique order number, Full order number as displayed in shop. With dash if the prefix is available. This will be null when 'is_completed' is false.
     * @return self
     */
    public function setOrdernumberFull(?string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        $this->propertyFilled('ordernumberFull');
        return $this;
    }

    /**
     * @param int|null $invoicenumber Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
     * @return self
     */
    public function setInvoicenumber(?int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        $this->propertyFilled('invoicenumber');
        return $this;
    }

    /**
     * @param string|null $transactionId The most recent transaction id. Transaction Ids are normally provided by external Payment Service Providers. If an order has multiple transaction, this value is overwritten. If it has no transactions or if the PSP doens't provide an Id this is NULL.
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;
        $this->propertyFilled('transactionId');
        return $this;
    }

    /**
     * @param string $createDate Createdate of this order in UTC
     * @return self
     */
    public function setCreateDate(string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param string $deliverMethod This is the deliver method the customer has chosen during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
     * @return self
     */
    public function setDeliverMethod(string $deliverMethod): self
    {
        $this->deliverMethod = $deliverMethod;
        $this->propertyFilled('deliverMethod');
        return $this;
    }

    /**
     * @param string|null $deliverDate Delivery date in UTC. In case of take out, see take_out_slot.
     * @return self
     */
    public function setDeliverDate(?string $deliverDate): self
    {
        $this->deliverDate = $deliverDate;
        $this->propertyFilled('deliverDate');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\TakeOutWindow $takeOutWindow Contains info on the window chosen by the the customer during the checkout. Will only be filled if delivery_method is delivery or pickup.
     * @return self
     */
    public function setTakeOutWindow(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\TakeOutWindow $takeOutWindow): self
    {
        $this->takeOutWindow = $takeOutWindow;
        $this->propertyFilled('takeOutWindow');
        return $this;
    }

    /**
     * @param string $orderedinlng Language in which this order was ordered
     * @return self
     */
    public function setOrderedinlng(string $orderedinlng): self
    {
        $this->orderedinlng = $orderedinlng;
        $this->propertyFilled('orderedinlng');
        return $this;
    }

    /**
     * @param int|null $status Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }

    /**
     * @param bool|null $isCompleted If status is null 'is_completed' will be false. If false, the order hasn't been completed by the customer.
     * @return self
     */
    public function setIsCompleted(?bool $isCompleted): self
    {
        $this->isCompleted = $isCompleted;
        $this->propertyFilled('isCompleted');
        return $this;
    }

    /**
     * @param string|null $basketHref Link to the shopping basket, only available when 'is_completed' is false.
     * @return self
     */
    public function setBasketHref(?string $basketHref): self
    {
        $this->basketHref = $basketHref;
        $this->propertyFilled('basketHref');
        return $this;
    }

    /**
     * @param string|null $checkoutHref Link to the checkout page, only available when 'is_completed' is false. If the shop has the regular checkout, this will be the basket_href.
     * @return self
     */
    public function setCheckoutHref(?string $checkoutHref): self
    {
        $this->checkoutHref = $checkoutHref;
        $this->propertyFilled('checkoutHref');
        return $this;
    }

    /**
     * @param bool $paid If the order is marked as paid
     * @return self
     */
    public function setPaid(bool $paid): self
    {
        $this->paid = $paid;
        $this->propertyFilled('paid');
        return $this;
    }

    /**
     * @param bool $safetyDepositReturned If the order's safety deposit is returned to the customer.
     * @return self
     */
    public function setSafetyDepositReturned(bool $safetyDepositReturned): self
    {
        $this->safetyDepositReturned = $safetyDepositReturned;
        $this->propertyFilled('safetyDepositReturned');
        return $this;
    }

    /**
     * @param int $paymethodId Paymethod Id of the order. Corresponse with the resource paymethods.
     * @return self
     */
    public function setPaymethodId(int $paymethodId): self
    {
        $this->paymethodId = $paymethodId;
        $this->propertyFilled('paymethodId');
        return $this;
    }

    /**
     * @param string $paymethod Paymethod of the order
     * @return self
     */
    public function setPaymethod(string $paymethod): self
    {
        $this->paymethod = $paymethod;
        $this->propertyFilled('paymethod');
        return $this;
    }

    /**
     * @param bool $taxesIncluded If taxes are calculated in the total price. If false, all taxes will be hidden.
     * @return self
     */
    public function setTaxesIncluded(bool $taxesIncluded): self
    {
        $this->taxesIncluded = $taxesIncluded;
        $this->propertyFilled('taxesIncluded');
        return $this;
    }

    /**
     * @param bool $orderRowTaxesIncluded If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
     * @return self
     */
    public function setOrderRowTaxesIncluded(bool $orderRowTaxesIncluded): self
    {
        $this->orderRowTaxesIncluded = $orderRowTaxesIncluded;
        $this->propertyFilled('orderRowTaxesIncluded');
        return $this;
    }

    /**
     * @param bool $shippingTaxesIncluded If shippingcosts are included in the total tax amount
     * @return self
     */
    public function setShippingTaxesIncluded(bool $shippingTaxesIncluded): self
    {
        $this->shippingTaxesIncluded = $shippingTaxesIncluded;
        $this->propertyFilled('shippingTaxesIncluded');
        return $this;
    }

    /**
     * @param float $shippingTaxPercentage Tax percentage of the shipping costs
     * @return self
     */
    public function setShippingTaxPercentage(float $shippingTaxPercentage): self
    {
        $this->shippingTaxPercentage = $shippingTaxPercentage;
        $this->propertyFilled('shippingTaxPercentage');
        return $this;
    }

    /**
     * @param bool $isIntraCommunityOrder Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
     * @return self
     */
    public function setIsIntraCommunityOrder(bool $isIntraCommunityOrder): self
    {
        $this->isIntraCommunityOrder = $isIntraCommunityOrder;
        $this->propertyFilled('isIntraCommunityOrder');
        return $this;
    }

    /**
     * @param float $totalOrderrowPrice Total orderrow price
     * @return self
     */
    public function setTotalOrderrowPrice(float $totalOrderrowPrice): self
    {
        $this->totalOrderrowPrice = $totalOrderrowPrice;
        $this->propertyFilled('totalOrderrowPrice');
        return $this;
    }

    /**
     * @param float $totalShipping Total shipping costs
     * @return self
     */
    public function setTotalShipping(float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;
        $this->propertyFilled('totalShipping');
        return $this;
    }

    /**
     * @param float $totalDiscounts Total discount
     * @return self
     */
    public function setTotalDiscounts(float $totalDiscounts): self
    {
        $this->totalDiscounts = $totalDiscounts;
        $this->propertyFilled('totalDiscounts');
        return $this;
    }

    /**
     * @param float $totalPrice Total price
     * @return self
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        $this->propertyFilled('totalPrice');
        return $this;
    }

    /**
     * @param string $currency ISO 4217 Currency Code
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        $this->propertyFilled('currency');
        return $this;
    }

    /**
     * @param float $totalTax Total tax amount
     * @return self
     */
    public function setTotalTax(float $totalTax): self
    {
        $this->totalTax = $totalTax;
        $this->propertyFilled('totalTax');
        return $this;
    }

    /**
     * @param float $totalWeight Total weight of the order in kilograms
     * @return self
     */
    public function setTotalWeight(float $totalWeight): self
    {
        $this->totalWeight = $totalWeight;
        $this->propertyFilled('totalWeight');
        return $this;
    }

    /**
     * @param string $extraPaymentOption Payment option name
     * @return self
     */
    public function setExtraPaymentOption(string $extraPaymentOption): self
    {
        $this->extraPaymentOption = $extraPaymentOption;
        $this->propertyFilled('extraPaymentOption');
        return $this;
    }

    /**
     * @param float|null $extraPaymentOptionPrice Payment option price
     * @return self
     */
    public function setExtraPaymentOptionPrice(?float $extraPaymentOptionPrice): self
    {
        $this->extraPaymentOptionPrice = $extraPaymentOptionPrice;
        $this->propertyFilled('extraPaymentOptionPrice');
        return $this;
    }

    /**
     * @param bool $extraPaymentOptionNoSentprice If shipping was free with this payment option
     * @return self
     */
    public function setExtraPaymentOptionNoSentprice(bool $extraPaymentOptionNoSentprice): self
    {
        $this->extraPaymentOptionNoSentprice = $extraPaymentOptionNoSentprice;
        $this->propertyFilled('extraPaymentOptionNoSentprice');
        return $this;
    }

    /**
     * @param bool $extraPaymentOptionPayOnPickup If this order will be paid on pickup with this payment option
     * @return self
     */
    public function setExtraPaymentOptionPayOnPickup(bool $extraPaymentOptionPayOnPickup): self
    {
        $this->extraPaymentOptionPayOnPickup = $extraPaymentOptionPayOnPickup;
        $this->propertyFilled('extraPaymentOptionPayOnPickup');
        return $this;
    }

    /**
     * @param float $extraPrice Deprecated. Extra price added to the order as an additional fee for paymethod costs and the discount from turning in credits. See 'paymethod_costs' and 'credit_point_discount'
     * @return self
     * @deprecated See 'paymethod_costs' and 'credit_point_discount'
     */
    public function setExtraPrice(float $extraPrice): self
    {
        $this->extraPrice = $extraPrice;
        $this->propertyFilled('extraPrice');
        return $this;
    }

    /**
     * @param float $paymethodCosts Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'
     * @return self
     */
    public function setPaymethodCosts(float $paymethodCosts): self
    {
        $this->paymethodCosts = $paymethodCosts;
        $this->propertyFilled('paymethodCosts');
        return $this;
    }

    /**
     * @param float $creditPointDiscount The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'
     * @return self
     */
    public function setCreditPointDiscount(float $creditPointDiscount): self
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
     * @param string $trackAndTraceCode Track & Trace code
     * @return self
     */
    public function setTrackAndTraceCode(string $trackAndTraceCode): self
    {
        $this->trackAndTraceCode = $trackAndTraceCode;
        $this->propertyFilled('trackAndTraceCode');
        return $this;
    }

    /**
     * @param string|null $trackAndTraceCarrier Track & Trace Carrier. This value represents the shipping service.
     * @return self
     */
    public function setTrackAndTraceCarrier(?string $trackAndTraceCarrier): self
    {
        $this->trackAndTraceCarrier = $trackAndTraceCarrier;
        $this->propertyFilled('trackAndTraceCarrier');
        return $this;
    }

    /**
     * @param string $trackAndTraceDeeplink Track & Trace deeplink. This links to the shipping carrier status page.
     * @return self
     */
    public function setTrackAndTraceDeeplink(string $trackAndTraceDeeplink): self
    {
        $this->trackAndTraceDeeplink = $trackAndTraceDeeplink;
        $this->propertyFilled('trackAndTraceDeeplink');
        return $this;
    }

    /**
     * @param string|null $reservationnumber The reservation number for an order. This may be visible on the invoice
     * @return self
     */
    public function setReservationnumber(?string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        $this->propertyFilled('reservationnumber');
        return $this;
    }

    /**
     * @param string|null $deliveryOption The delivery option the customer selected, when PG or PGE is chosen the property pickup_address is filled with the pickup address. DHDLE may be applicable to German users who ordered using the DHL Checkout.
     * @return self
     */
    public function setDeliveryOption(?string $deliveryOption): self
    {
        $this->deliveryOption = $deliveryOption;
        $this->propertyFilled('deliveryOption');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\User $user Link to possible user resource associated with this order
     * @return self
     */
    public function setUser(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\User $user): self
    {
        $this->user = $user;
        $this->propertyFilled('user');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Discountcoupon $discountcoupon Link to possible discount coupon associated with this order
     * @return self
     */
    public function setDiscountcoupon(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Discountcoupon $discountcoupon): self
    {
        $this->discountcoupon = $discountcoupon;
        $this->propertyFilled('discountcoupon');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Entity\Personalinfo|null $customer Describes personal information of the customer
     * @return self
     */
    public function setCustomer(?\JacobDeKeizer\Ccv\Models\Orders\Entity\Personalinfo $customer): self
    {
        $this->customer = $customer;
        $this->propertyFilled('customer');
        return $this;
    }

    /**
     * @param object|null $pickupAddress The pickup address that the customer selected
     * @return self
     */
    public function setPickupAddress(?object $pickupAddress): self
    {
        $this->pickupAddress = $pickupAddress;
        $this->propertyFilled('pickupAddress');
        return $this;
    }

    /**
     * @param string|null $packingSlipDeeplink Deeplink to download the pdf packing slip. This will be null on uncompleted orders.
     * @return self
     */
    public function setPackingSlipDeeplink(?string $packingSlipDeeplink): self
    {
        $this->packingSlipDeeplink = $packingSlipDeeplink;
        $this->propertyFilled('packingSlipDeeplink');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderrows $orderrows Products that are ordered with this order
     * @return self
     */
    public function setOrderrows(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderrows $orderrows): self
    {
        $this->orderrows = $orderrows;
        $this->propertyFilled('orderrows');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotes $ordernotes Notes added to this order
     * @return self
     */
    public function setOrdernotes(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotes $ordernotes): self
    {
        $this->ordernotes = $ordernotes;
        $this->propertyFilled('ordernotes');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordermessages $ordermessages Messages sent to the customer
     * @return self
     */
    public function setOrdermessages(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordermessages $ordermessages): self
    {
        $this->ordermessages = $ordermessages;
        $this->propertyFilled('ordermessages');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotifications $ordernotifications Order notifications are used to send e-mails of the different types. For instance, an order's invoice can be sent to the customer. GET will return all previous notifications created by the API. For now, notifications created automatically or by the merchant will not show up in the collections.
     * @return self
     */
    public function setOrdernotifications(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Ordernotifications $ordernotifications): self
    {
        $this->ordernotifications = $ordernotifications;
        $this->propertyFilled('ordernotifications');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderaffiliatenetworks $orderaffiliatenetworks Affilate networks
     * @return self
     */
    public function setOrderaffiliatenetworks(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderaffiliatenetworks $orderaffiliatenetworks): self
    {
        $this->orderaffiliatenetworks = $orderaffiliatenetworks;
        $this->propertyFilled('orderaffiliatenetworks');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderlabels|null $orderlabels Order labels
     * @return self
     */
    public function setOrderlabels(?\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Orderlabels $orderlabels): self
    {
        $this->orderlabels = $orderlabels;
        $this->propertyFilled('orderlabels');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Invoices $invoices Invoices used for creating a new invoice.
     * @return self
     */
    public function setInvoices(\JacobDeKeizer\Ccv\Models\Orders\Child\Resource\Invoices $invoices): self
    {
        $this->invoices = $invoices;
        $this->propertyFilled('invoices');
        return $this;
    }
}
