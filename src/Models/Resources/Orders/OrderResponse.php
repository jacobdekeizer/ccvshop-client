<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Models\Entities\PersonalInfo;
use JacobDeKeizer\Ccv\Models\Href;
use JacobDeKeizer\Ccv\Models\Href\Orderrow;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class OrderResponse implements Model
{
    use FromArray, ToArray;

    private $href;
    private $id;
    private $ordernumberPrefix;
    private $ordernumber;
    private $ordernumberFull;
    private $invoicenumber;
    private $createDate;
    private $deliverMethod;
    private $deliverDate;
    private $takeOutWindow;
    private $orderedinlng;
    private $status;
    private $isCompleted;
    private $paid;
    private $safetyDepositReturned;
    private $paymethodId;
    private $paymethod;
    private $taxesIncluded;
    private $orderRowTaxesIncluded;
    private $shippingTaxesIncluded;
    private $shippingTaxPercentage;
    private $isIntraCommunityOrder;
    private $totalOrderrowPrice;
    private $totalShipping;
    private $totalDiscounts;
    private $totalPrice;
    private $currency;
    private $totalTax;
    private $totalWeight;
    private $extraPaymentOption;
    private $extraPaymentOptionPrice;
    private $extraPaymentOptionNoSentprice;
    private $extraPaymentOptionPayOnPickup;
    private $extraPrice;
    private $paymethodCosts;
    private $creditPointDiscount;
    private $extraCosts;
    private $extraCostsDescription;
    private $trackAndTraceCode;
    private $trackAndTraceCarrier;
    private $reservationnumber;
    private $deliveryOption;
    private $user;
    private $discountcoupon;
    private $customer;
    private $pickupAddress;
    private $orderrows;
    private $ordernotes;
    private $ordernotifications;
    private $orderaffiliatenetworks;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOrdernumberPrefix(): ?string
    {
        return $this->ordernumberPrefix;
    }

    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
    }

    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    public function getDeliverMethod(): string
    {
        return $this->deliverMethod;
    }

    public function getDeliverDate(): ?string
    {
        return $this->deliverDate;
    }

    public function getTakeOutWindow(): TakeOutWindow
    {
        return $this->takeOutWindow;
    }

    public function getOrderedinlng(): string
    {
        return $this->orderedinlng;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function getIsCompleted(): bool
    {
        return $this->isCompleted;
    }

    public function getPaid(): bool
    {
        return $this->paid;
    }

    public function getSafetyDepositReturned(): bool
    {
        return $this->safetyDepositReturned;
    }

    public function getPaymethodId(): int
    {
        return $this->paymethodId;
    }

    public function getPaymethod(): string
    {
        return $this->paymethod;
    }

    public function getTaxesIncluded(): bool
    {
        return $this->taxesIncluded;
    }

    public function getOrderRowTaxesIncluded(): bool
    {
        return $this->orderRowTaxesIncluded;
    }

    public function getShippingTaxesIncluded(): bool
    {
        return $this->shippingTaxesIncluded;
    }

    public function getShippingTaxPercentage(): float
    {
        return $this->shippingTaxPercentage;
    }

    public function getIsIntraCommunityOrder(): bool
    {
        return $this->isIntraCommunityOrder;
    }

    public function getTotalOrderrowPrice(): float
    {
        return $this->totalOrderrowPrice;
    }

    public function getTotalShipping(): float
    {
        return $this->totalShipping;
    }

    public function getTotalDiscounts(): float
    {
        return $this->totalDiscounts;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalTax(): float
    {
        return $this->totalTax;
    }

    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }

    public function getExtraPaymentOption(): string
    {
        return $this->extraPaymentOption;
    }

    public function getExtraPaymentOptionPrice(): ?float
    {
        return $this->extraPaymentOptionPrice;
    }

    public function getExtraPaymentOptionNoSentprice(): bool
    {
        return $this->extraPaymentOptionNoSentprice;
    }

    public function getExtraPaymentOptionPayOnPickup(): bool
    {
        return $this->extraPaymentOptionPayOnPickup;
    }

    public function getExtraPrice(): float
    {
        return $this->extraPrice;
    }

    public function getPaymethodCosts(): float
    {
        return $this->paymethodCosts;
    }

    public function getCreditPointDiscount(): float
    {
        return $this->creditPointDiscount;
    }

    public function getExtraCosts(): float
    {
        return $this->extraCosts;
    }

    public function getExtraCostsDescription(): string
    {
        return $this->extraCostsDescription;
    }

    public function getTrackAndTraceCode(): string
    {
        return $this->trackAndTraceCode;
    }

    public function getTrackAndTraceCarrier(): ?string
    {
        return $this->trackAndTraceCarrier;
    }

    public function getReservationnumber(): string
    {
        return $this->reservationnumber;
    }

    public function getDeliveryOption(): ?string
    {
        return $this->deliveryOption;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getDiscountcoupon(): Discountcoupon
    {
        return $this->discountcoupon;
    }

    public function getCustomer(): PersonalInfo
    {
        return $this->customer;
    }

    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    public function getOrderrows(): Orderrow
    {
        return $this->orderrows;
    }

    public function getOrdernotes(): Href
    {
        return $this->ordernotes;
    }

    public function getOrdernotifications(): Href
    {
        return $this->ordernotifications;
    }

    public function getOrderaffiliatenetworks(): Href
    {
        return $this->orderaffiliatenetworks;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setOrdernumberPrefix(?string $ordernumberPrefix): self
    {
        $this->ordernumberPrefix = $ordernumberPrefix;
        return $this;
    }

    public function setOrdernumber(?int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    public function setOrdernumberFull(?string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        return $this;
    }

    public function setInvoicenumber(?int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        return $this;
    }

    public function setCreateDate(string $createDate): self
    {
        $this->createDate = $createDate;
        return $this;
    }

    public function setDeliverMethod(string $deliverMethod): self
    {
        $this->deliverMethod = $deliverMethod;
        return $this;
    }

    public function setDeliverDate(?string $deliverDate): self
    {
        $this->deliverDate = $deliverDate;
        return $this;
    }

    public function setTakeOutWindow(TakeOutWindow $takeOutWindow): self
    {
        $this->takeOutWindow = $takeOutWindow;
        return $this;
    }

    public function setOrderedinlng(string $orderedinlng): self
    {
        $this->orderedinlng = $orderedinlng;
        return $this;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setIsCompleted(bool $isCompleted): self
    {
        $this->isCompleted = $isCompleted;
        return $this;
    }

    public function setPaid(bool $paid): self
    {
        $this->paid = $paid;
        return $this;
    }

    public function setSafetyDepositReturned(bool $safetyDepositReturned): self
    {
        $this->safetyDepositReturned = $safetyDepositReturned;
        return $this;
    }

    public function setPaymethodId(int $paymethodId): self
    {
        $this->paymethodId = $paymethodId;
        return $this;
    }

    public function setPaymethod(string $paymethod): self
    {
        $this->paymethod = $paymethod;
        return $this;
    }

    public function setTaxesIncluded(bool $taxesIncluded): self
    {
        $this->taxesIncluded = $taxesIncluded;
        return $this;
    }

    public function setOrderRowTaxesIncluded(bool $orderRowTaxesIncluded): self
    {
        $this->orderRowTaxesIncluded = $orderRowTaxesIncluded;
        return $this;
    }

    public function setShippingTaxesIncluded(bool $shippingTaxesIncluded): self
    {
        $this->shippingTaxesIncluded = $shippingTaxesIncluded;
        return $this;
    }

    public function setShippingTaxPercentage(int $shippingTaxPercentage): self
    {
        $this->shippingTaxPercentage = $shippingTaxPercentage;
        return $this;
    }

    public function setIsIntraCommunityOrder(bool $isIntraCommunityOrder): self
    {
        $this->isIntraCommunityOrder = $isIntraCommunityOrder;
        return $this;
    }

    public function setTotalOrderrowPrice(float $totalOrderrowPrice): self
    {
        $this->totalOrderrowPrice = $totalOrderrowPrice;
        return $this;
    }

    public function setTotalShipping(float $totalShipping): self
    {
        $this->totalShipping = $totalShipping;
        return $this;
    }

    public function setTotalDiscounts(float $totalDiscounts): self
    {
        $this->totalDiscounts = $totalDiscounts;
        return $this;
    }

    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function setTotalTax(float $totalTax): self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    public function setTotalWeight(float $totalWeight): self
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }

    public function setExtraPaymentOption(string $extraPaymentOption): self
    {
        $this->extraPaymentOption = $extraPaymentOption;
        return $this;
    }

    public function setExtraPaymentOptionPrice(?float $extraPaymentOptionPrice): self
    {
        $this->extraPaymentOptionPrice = $extraPaymentOptionPrice;
        return $this;
    }

    public function setExtraPaymentOptionNoSentprice(bool $extraPaymentOptionNoSentprice): self
    {
        $this->extraPaymentOptionNoSentprice = $extraPaymentOptionNoSentprice;
        return $this;
    }

    public function setExtraPaymentOptionPayOnPickup(bool $extraPaymentOptionPayOnPickup): self
    {
        $this->extraPaymentOptionPayOnPickup = $extraPaymentOptionPayOnPickup;
        return $this;
    }

    public function setExtraPrice(float $extraPrice): self
    {
        $this->extraPrice = $extraPrice;
        return $this;
    }

    public function setPaymethodCosts(float $paymethodCosts): self
    {
        $this->paymethodCosts = $paymethodCosts;
        return $this;
    }

    public function setCreditPointDiscount(float $creditPointDiscount): self
    {
        $this->creditPointDiscount = $creditPointDiscount;
        return $this;
    }

    public function setExtraCosts(float $extraCosts): self
    {
        $this->extraCosts = $extraCosts;
        return $this;
    }

    public function setExtraCostsDescription(string $extraCostsDescription): self
    {
        $this->extraCostsDescription = $extraCostsDescription;
        return $this;
    }

    public function setTrackAndTraceCode(string $trackAndTraceCode): self
    {
        $this->trackAndTraceCode = $trackAndTraceCode;
        return $this;
    }

    public function setTrackAndTraceCarrier(?string $trackAndTraceCarrier): self
    {
        $this->trackAndTraceCarrier = $trackAndTraceCarrier;
        return $this;
    }

    public function setReservationnumber(string $reservationnumber): self
    {
        $this->reservationnumber = $reservationnumber;
        return $this;
    }

    public function setDeliveryOption(?string $deliveryOption): self
    {
        $this->deliveryOption = $deliveryOption;
        return $this;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function setDiscountcoupon(Discountcoupon $discountcoupon): self
    {
        $this->discountcoupon = $discountcoupon;
        return $this;
    }

    public function setCustomer(PersonalInfo $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @var mixed|null $pickupAddress
     */
    public function setPickupAddress($pickupAddress): self
    {
        $this->pickupAddress = $pickupAddress;
        return $this;
    }

    public function setOrderrows(Orderrow $orderrows): self
    {
        $this->orderrows = $orderrows;
        return $this;
    }

    public function setOrdernotes(Href $ordernotes): self
    {
        $this->ordernotes = $ordernotes;
        return $this;
    }

    public function setOrdernotifications(Href $ordernotifications): self
    {
        $this->ordernotifications = $ordernotifications;
        return $this;
    }

    public function setOrderaffiliatenetworks(Href $orderaffiliatenetworks): self
    {
        $this->orderaffiliatenetworks = $orderaffiliatenetworks;
        return $this;
    }
}
