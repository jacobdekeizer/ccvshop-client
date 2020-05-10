<?php 

namespace JacobDeKeizer\Ccv\Models\Webshop\Resource;

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
	 private $ordernumber_prefix;

	/**
	 * @var int|null Order number, automatically generated when the order is completed. This will be null when 'is_completed' is false.
	 */
	 private $ordernumber;

	/**
	 * @var string|null Unique order number, Full order number as displayed in shop. With dash if the prefix is available. This will be null when 'is_completed' is false.
	 */
	 private $ordernumber_full;

	/**
	 * @var int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
	 */
	 private $invoicenumber;

	/**
	 * @var string Createdate of this order in UTC
	 */
	 private $create_date;

	/**
	 * @var string This is the deliver method the customer has chosen during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
	 */
	 private $deliver_method;

	/**
	 * @var string|null Delivery date in UTC. In case of take out, see take_out_slot.
	 */
	 private $deliver_date;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\TakeOutWindow Contains info on the window chosen by the the customer during the checkout. Will only be filled if delivery_method is delivery or pickup.
	 */
	 private $take_out_window;

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
	 private $is_completed;

	/**
	 * @var string|null Link to the shopping basket, only available when 'is_completed' is false.
	 */
	 private $basket_href;

	/**
	 * @var string|null Link to the checkout page, only available when 'is_completed' is false. If the shop has the regular checkout, this will be the basket_href.
	 */
	 private $checkout_href;

	/**
	 * @var bool If the order is marked as paid
	 */
	 private $paid;

	/**
	 * @var bool If the order's safety deposit is returned to the customer.
	 */
	 private $safety_deposit_returned;

	/**
	 * @var int Paymethod Id of the order. Corresponse with the resource paymethods.
	 */
	 private $paymethod_id;

	/**
	 * @var string Paymethod of the order
	 */
	 private $paymethod;

	/**
	 * @var bool If taxes are calculated in the total price. If false, all taxes will be hidden.
	 */
	 private $taxes_included;

	/**
	 * @var bool If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
	 */
	 private $order_row_taxes_included;

	/**
	 * @var bool If shippingcosts are included in the total tax amount
	 */
	 private $shipping_taxes_included;

	/**
	 * @var float Tax percentage of the shipping costs
	 */
	 private $shipping_tax_percentage;

	/**
	 * @var bool Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
	 */
	 private $is_intra_community_order;

	/**
	 * @var float Total orderrow price
	 */
	 private $total_orderrow_price;

	/**
	 * @var float Total shipping costs
	 */
	 private $total_shipping;

	/**
	 * @var float Total discount
	 */
	 private $total_discounts;

	/**
	 * @var float Total price
	 */
	 private $total_price;

	/**
	 * @var string ISO 4217 Currency Code
	 */
	 private $currency;

	/**
	 * @var float Total tax amount
	 */
	 private $total_tax;

	/**
	 * @var float Total weight of the order in kilograms
	 */
	 private $total_weight;

	/**
	 * @var string Payment option name
	 */
	 private $extra_payment_option;

	/**
	 * @var float|null Payment option price
	 */
	 private $extra_payment_option_price;

	/**
	 * @var bool If shipping was free with this payment option
	 */
	 private $extra_payment_option_no_sentprice;

	/**
	 * @var bool If this order will be paid on pickup with this payment option
	 */
	 private $extra_payment_option_pay_on_pickup;

	/**
	 * @var float Deprecated. Extra price added to the order as an additional fee for paymethod costs and the discount from turning in credits. See 'paymethod_costs' and 'credit_point_discount'
	 */
	 private $extra_price;

	/**
	 * @var float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'
	 */
	 private $paymethod_costs;

	/**
	 * @var float The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'
	 */
	 private $credit_point_discount;

	/**
	 * @var float Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero. 
	 */
	 private $extra_costs;

	/**
	 * @var string Description of the extra costs. This is visible on the invoice.
	 */
	 private $extra_costs_description;

	/**
	 * @var string Track & Trace code
	 */
	 private $track_and_trace_code;

	/**
	 * @var string|null Track & Trace Carrier. This value represents the shipping service.
	 */
	 private $track_and_trace_carrier;

	/**
	 * @var string|null The reservation number for an order. This may be visible on the invoice
	 */
	 private $reservationnumber;

	/**
	 * @var string|null The delivery option the customer selected, when PG or PGE is chosen the property pickup_address is filled with the pickup address. DHDLE may be applicable to German users who ordered using the DHL Checkout.
	 */
	 private $delivery_option;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\User Link to possible user resource associated with this order
	 */
	 private $user;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\Discountcoupon Link to possible discount coupon associated with this order
	 */
	 private $discountcoupon;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Entity\Personalinfo|null Describes personal information of the customer
	 */
	 private $customer;

	/**
	 * @var object|null The pickup address that the customer selected
	 */
	 private $pickup_address;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderrows Products that are ordered with this order
	 */
	 private $orderrows;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotes Notes added to this order
	 */
	 private $ordernotes;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotifications Order notifications are used to send e-mails of the different types. For instance, an order's invoice can be sent to the customer. GET will return all previous notifications created by the API. For now, notifications created automatically or by the merchant will not show up in the collections.
	 */
	 private $ordernotifications;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderaffiliatenetworks Affilate networks
	 */
	 private $orderaffiliatenetworks;

	/**
	 * @var \JacobDeKeizer\Ccv\Models\Webshop\Resource\Invoices Invoices used for creating a new invoice.
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
	public function getOrdernumber_prefix(): ?string
	{
		return $this->ordernumber_prefix;
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
	public function getOrdernumber_full(): ?string
	{
		return $this->ordernumber_full;
	}

	/**
	 * @return int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
	 */
	public function getInvoicenumber(): ?int
	{
		return $this->invoicenumber;
	}

	/**
	 * @return string Createdate of this order in UTC
	 */
	public function getCreate_date(): string
	{
		return $this->create_date;
	}

	/**
	 * @return string This is the deliver method the customer has chosen during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
	 */
	public function getDeliver_method(): string
	{
		return $this->deliver_method;
	}

	/**
	 * @return string|null Delivery date in UTC. In case of take out, see take_out_slot.
	 */
	public function getDeliver_date(): ?string
	{
		return $this->deliver_date;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\TakeOutWindow Contains info on the window chosen by the the customer during the checkout. Will only be filled if delivery_method is delivery or pickup.
	 */
	public function getTake_out_window(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\TakeOutWindow
	{
		return $this->take_out_window;
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
	public function getIs_completed(): ?bool
	{
		return $this->is_completed;
	}

	/**
	 * @return string|null Link to the shopping basket, only available when 'is_completed' is false.
	 */
	public function getBasket_href(): ?string
	{
		return $this->basket_href;
	}

	/**
	 * @return string|null Link to the checkout page, only available when 'is_completed' is false. If the shop has the regular checkout, this will be the basket_href.
	 */
	public function getCheckout_href(): ?string
	{
		return $this->checkout_href;
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
	public function getSafety_deposit_returned(): bool
	{
		return $this->safety_deposit_returned;
	}

	/**
	 * @return int Paymethod Id of the order. Corresponse with the resource paymethods.
	 */
	public function getPaymethod_id(): int
	{
		return $this->paymethod_id;
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
	public function getTaxes_included(): bool
	{
		return $this->taxes_included;
	}

	/**
	 * @return bool If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
	 */
	public function getOrder_row_taxes_included(): bool
	{
		return $this->order_row_taxes_included;
	}

	/**
	 * @return bool If shippingcosts are included in the total tax amount
	 */
	public function getShipping_taxes_included(): bool
	{
		return $this->shipping_taxes_included;
	}

	/**
	 * @return float Tax percentage of the shipping costs
	 */
	public function getShipping_tax_percentage(): float
	{
		return $this->shipping_tax_percentage;
	}

	/**
	 * @return bool Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
	 */
	public function getIs_intra_community_order(): bool
	{
		return $this->is_intra_community_order;
	}

	/**
	 * @return float Total orderrow price
	 */
	public function getTotal_orderrow_price(): float
	{
		return $this->total_orderrow_price;
	}

	/**
	 * @return float Total shipping costs
	 */
	public function getTotal_shipping(): float
	{
		return $this->total_shipping;
	}

	/**
	 * @return float Total discount
	 */
	public function getTotal_discounts(): float
	{
		return $this->total_discounts;
	}

	/**
	 * @return float Total price
	 */
	public function getTotal_price(): float
	{
		return $this->total_price;
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
	public function getTotal_tax(): float
	{
		return $this->total_tax;
	}

	/**
	 * @return float Total weight of the order in kilograms
	 */
	public function getTotal_weight(): float
	{
		return $this->total_weight;
	}

	/**
	 * @return string Payment option name
	 */
	public function getExtra_payment_option(): string
	{
		return $this->extra_payment_option;
	}

	/**
	 * @return float|null Payment option price
	 */
	public function getExtra_payment_option_price(): ?float
	{
		return $this->extra_payment_option_price;
	}

	/**
	 * @return bool If shipping was free with this payment option
	 */
	public function getExtra_payment_option_no_sentprice(): bool
	{
		return $this->extra_payment_option_no_sentprice;
	}

	/**
	 * @return bool If this order will be paid on pickup with this payment option
	 */
	public function getExtra_payment_option_pay_on_pickup(): bool
	{
		return $this->extra_payment_option_pay_on_pickup;
	}

	/**
	 * @return float Deprecated. Extra price added to the order as an additional fee for paymethod costs and the discount from turning in credits. See 'paymethod_costs' and 'credit_point_discount'
	 */
	public function getExtra_price(): float
	{
		return $this->extra_price;
	}

	/**
	 * @return float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'
	 */
	public function getPaymethod_costs(): float
	{
		return $this->paymethod_costs;
	}

	/**
	 * @return float The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'
	 */
	public function getCredit_point_discount(): float
	{
		return $this->credit_point_discount;
	}

	/**
	 * @return float Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero. 
	 */
	public function getExtra_costs(): float
	{
		return $this->extra_costs;
	}

	/**
	 * @return string Description of the extra costs. This is visible on the invoice.
	 */
	public function getExtra_costs_description(): string
	{
		return $this->extra_costs_description;
	}

	/**
	 * @return string Track & Trace code
	 */
	public function getTrack_and_trace_code(): string
	{
		return $this->track_and_trace_code;
	}

	/**
	 * @return string|null Track & Trace Carrier. This value represents the shipping service.
	 */
	public function getTrack_and_trace_carrier(): ?string
	{
		return $this->track_and_trace_carrier;
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
	public function getDelivery_option(): ?string
	{
		return $this->delivery_option;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\User Link to possible user resource associated with this order
	 */
	public function getUser(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\User
	{
		return $this->user;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\Discountcoupon Link to possible discount coupon associated with this order
	 */
	public function getDiscountcoupon(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\Discountcoupon
	{
		return $this->discountcoupon;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Entity\Personalinfo|null Describes personal information of the customer
	 */
	public function getCustomer(): ?\JacobDeKeizer\Ccv\Models\Webshop\Entity\Personalinfo
	{
		return $this->customer;
	}

	/**
	 * @return object|null The pickup address that the customer selected
	 */
	public function getPickup_address(): ?object
	{
		return $this->pickup_address;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderrows Products that are ordered with this order
	 */
	public function getOrderrows(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderrows
	{
		return $this->orderrows;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotes Notes added to this order
	 */
	public function getOrdernotes(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotes
	{
		return $this->ordernotes;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotifications Order notifications are used to send e-mails of the different types. For instance, an order's invoice can be sent to the customer. GET will return all previous notifications created by the API. For now, notifications created automatically or by the merchant will not show up in the collections.
	 */
	public function getOrdernotifications(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotifications
	{
		return $this->ordernotifications;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderaffiliatenetworks Affilate networks
	 */
	public function getOrderaffiliatenetworks(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderaffiliatenetworks
	{
		return $this->orderaffiliatenetworks;
	}

	/**
	 * @return \JacobDeKeizer\Ccv\Models\Webshop\Resource\Invoices Invoices used for creating a new invoice.
	 */
	public function getInvoices(): \JacobDeKeizer\Ccv\Models\Webshop\Resource\Invoices
	{
		return $this->invoices;
	}

	/**
	 * @param string Link to self
	 * @return self
	 */
	public function setHref($href): self
	{
		$this->href = $href;
		return $this;
	}

	/**
	 * @param int Order id
	 * @return self
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @param string|null Prefix of the specific order number of the order. Automatically generated when the order is completed. This will be null when 'is_completed' is false.
	 * @return self
	 */
	public function setOrdernumber_prefix($ordernumber_prefix): self
	{
		$this->ordernumber_prefix = $ordernumber_prefix;
		return $this;
	}

	/**
	 * @param int|null Order number, automatically generated when the order is completed. This will be null when 'is_completed' is false.
	 * @return self
	 */
	public function setOrdernumber($ordernumber): self
	{
		$this->ordernumber = $ordernumber;
		return $this;
	}

	/**
	 * @param string|null Unique order number, Full order number as displayed in shop. With dash if the prefix is available. This will be null when 'is_completed' is false.
	 * @return self
	 */
	public function setOrdernumber_full($ordernumber_full): self
	{
		$this->ordernumber_full = $ordernumber_full;
		return $this;
	}

	/**
	 * @param int|null Invoice number of the order. This can be alter in the backend. This will be null when 'is_completed' is false.
	 * @return self
	 */
	public function setInvoicenumber($invoicenumber): self
	{
		$this->invoicenumber = $invoicenumber;
		return $this;
	}

	/**
	 * @param string Createdate of this order in UTC
	 * @return self
	 */
	public function setCreate_date($create_date): self
	{
		$this->create_date = $create_date;
		return $this;
	}

	/**
	 * @param string This is the deliver method the customer has chosen during checkout. Shipping implies using a postal service. Delivery and Pickup are considered take out options. Delivery implies personal delivery by the webshop. Pickup implies that the customer will pick up the order at the store location. If available the moment of deliver or pickup is in the field deliver_date.
	 * @return self
	 */
	public function setDeliver_method($deliver_method): self
	{
		$this->deliver_method = $deliver_method;
		return $this;
	}

	/**
	 * @param string|null Delivery date in UTC. In case of take out, see take_out_slot.
	 * @return self
	 */
	public function setDeliver_date($deliver_date): self
	{
		$this->deliver_date = $deliver_date;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\TakeOutWindow Contains info on the window chosen by the the customer during the checkout. Will only be filled if delivery_method is delivery or pickup.
	 * @return self
	 */
	public function setTake_out_window($take_out_window): self
	{
		$this->take_out_window = $take_out_window;
		return $this;
	}

	/**
	 * @param string Language in which this order was ordered
	 * @return self
	 */
	public function setOrderedinlng($orderedinlng): self
	{
		$this->orderedinlng = $orderedinlng;
		return $this;
	}

	/**
	 * @param int|null Status of the order. 1. New 2. In process 3. Wait for manufacturer 4. Wait for payment 5. Sent 6. Delivered 7. Completed 8. Cancelled 9. Wait for supplier 10. Is being packaged 11. Ready to be collected 12. Is being assembled 13. Backorder 14. Reserved
	 * @return self
	 */
	public function setStatus($status): self
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @param bool|null If status is null 'is_completed' will be false. If false, the order hasn't been completed by the customer.
	 * @return self
	 */
	public function setIs_completed($is_completed): self
	{
		$this->is_completed = $is_completed;
		return $this;
	}

	/**
	 * @param string|null Link to the shopping basket, only available when 'is_completed' is false.
	 * @return self
	 */
	public function setBasket_href($basket_href): self
	{
		$this->basket_href = $basket_href;
		return $this;
	}

	/**
	 * @param string|null Link to the checkout page, only available when 'is_completed' is false. If the shop has the regular checkout, this will be the basket_href.
	 * @return self
	 */
	public function setCheckout_href($checkout_href): self
	{
		$this->checkout_href = $checkout_href;
		return $this;
	}

	/**
	 * @param bool If the order is marked as paid
	 * @return self
	 */
	public function setPaid($paid): self
	{
		$this->paid = $paid;
		return $this;
	}

	/**
	 * @param bool If the order's safety deposit is returned to the customer.
	 * @return self
	 */
	public function setSafety_deposit_returned($safety_deposit_returned): self
	{
		$this->safety_deposit_returned = $safety_deposit_returned;
		return $this;
	}

	/**
	 * @param int Paymethod Id of the order. Corresponse with the resource paymethods.
	 * @return self
	 */
	public function setPaymethod_id($paymethod_id): self
	{
		$this->paymethod_id = $paymethod_id;
		return $this;
	}

	/**
	 * @param string Paymethod of the order
	 * @return self
	 */
	public function setPaymethod($paymethod): self
	{
		$this->paymethod = $paymethod;
		return $this;
	}

	/**
	 * @param bool If taxes are calculated in the total price. If false, all taxes will be hidden.
	 * @return self
	 */
	public function setTaxes_included($taxes_included): self
	{
		$this->taxes_included = $taxes_included;
		return $this;
	}

	/**
	 * @param bool If order row prices contain taxes. Use this field to choose between an inc. VAT order and an ex. VAT order.
	 * @return self
	 */
	public function setOrder_row_taxes_included($order_row_taxes_included): self
	{
		$this->order_row_taxes_included = $order_row_taxes_included;
		return $this;
	}

	/**
	 * @param bool If shippingcosts are included in the total tax amount
	 * @return self
	 */
	public function setShipping_taxes_included($shipping_taxes_included): self
	{
		$this->shipping_taxes_included = $shipping_taxes_included;
		return $this;
	}

	/**
	 * @param float Tax percentage of the shipping costs
	 * @return self
	 */
	public function setShipping_tax_percentage($shipping_tax_percentage): self
	{
		$this->shipping_tax_percentage = $shipping_tax_percentage;
		return $this;
	}

	/**
	 * @param bool Indicates if the order is marked as 'intra-Community'. Intra-Community sales have 0% VAT on all order rows.
	 * @return self
	 */
	public function setIs_intra_community_order($is_intra_community_order): self
	{
		$this->is_intra_community_order = $is_intra_community_order;
		return $this;
	}

	/**
	 * @param float Total orderrow price
	 * @return self
	 */
	public function setTotal_orderrow_price($total_orderrow_price): self
	{
		$this->total_orderrow_price = $total_orderrow_price;
		return $this;
	}

	/**
	 * @param float Total shipping costs
	 * @return self
	 */
	public function setTotal_shipping($total_shipping): self
	{
		$this->total_shipping = $total_shipping;
		return $this;
	}

	/**
	 * @param float Total discount
	 * @return self
	 */
	public function setTotal_discounts($total_discounts): self
	{
		$this->total_discounts = $total_discounts;
		return $this;
	}

	/**
	 * @param float Total price
	 * @return self
	 */
	public function setTotal_price($total_price): self
	{
		$this->total_price = $total_price;
		return $this;
	}

	/**
	 * @param string ISO 4217 Currency Code
	 * @return self
	 */
	public function setCurrency($currency): self
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * @param float Total tax amount
	 * @return self
	 */
	public function setTotal_tax($total_tax): self
	{
		$this->total_tax = $total_tax;
		return $this;
	}

	/**
	 * @param float Total weight of the order in kilograms
	 * @return self
	 */
	public function setTotal_weight($total_weight): self
	{
		$this->total_weight = $total_weight;
		return $this;
	}

	/**
	 * @param string Payment option name
	 * @return self
	 */
	public function setExtra_payment_option($extra_payment_option): self
	{
		$this->extra_payment_option = $extra_payment_option;
		return $this;
	}

	/**
	 * @param float|null Payment option price
	 * @return self
	 */
	public function setExtra_payment_option_price($extra_payment_option_price): self
	{
		$this->extra_payment_option_price = $extra_payment_option_price;
		return $this;
	}

	/**
	 * @param bool If shipping was free with this payment option
	 * @return self
	 */
	public function setExtra_payment_option_no_sentprice($extra_payment_option_no_sentprice): self
	{
		$this->extra_payment_option_no_sentprice = $extra_payment_option_no_sentprice;
		return $this;
	}

	/**
	 * @param bool If this order will be paid on pickup with this payment option
	 * @return self
	 */
	public function setExtra_payment_option_pay_on_pickup($extra_payment_option_pay_on_pickup): self
	{
		$this->extra_payment_option_pay_on_pickup = $extra_payment_option_pay_on_pickup;
		return $this;
	}

	/**
	 * @param float Deprecated. Extra price added to the order as an additional fee for paymethod costs and the discount from turning in credits. See 'paymethod_costs' and 'credit_point_discount'
	 * @return self
	 */
	public function setExtra_price($extra_price): self
	{
		$this->extra_price = $extra_price;
		return $this;
	}

	/**
	 * @param float Extra price added to the order as an additional fee for paymethod costs. Use this field instead of 'extra_price'
	 * @return self
	 */
	public function setPaymethod_costs($paymethod_costs): self
	{
		$this->paymethod_costs = $paymethod_costs;
		return $this;
	}

	/**
	 * @param float The discount from turning in credits. Only applicable if user_id is filled. Use this field instead of 'extra_price'
	 * @return self
	 */
	public function setCredit_point_discount($credit_point_discount): self
	{
		$this->credit_point_discount = $credit_point_discount;
		return $this;
	}

	/**
	 * @param float Extra costs added to the order, for instance as handling costs. This can be used as a discount less than zero. 
	 * @return self
	 */
	public function setExtra_costs($extra_costs): self
	{
		$this->extra_costs = $extra_costs;
		return $this;
	}

	/**
	 * @param string Description of the extra costs. This is visible on the invoice.
	 * @return self
	 */
	public function setExtra_costs_description($extra_costs_description): self
	{
		$this->extra_costs_description = $extra_costs_description;
		return $this;
	}

	/**
	 * @param string Track & Trace code
	 * @return self
	 */
	public function setTrack_and_trace_code($track_and_trace_code): self
	{
		$this->track_and_trace_code = $track_and_trace_code;
		return $this;
	}

	/**
	 * @param string|null Track & Trace Carrier. This value represents the shipping service.
	 * @return self
	 */
	public function setTrack_and_trace_carrier($track_and_trace_carrier): self
	{
		$this->track_and_trace_carrier = $track_and_trace_carrier;
		return $this;
	}

	/**
	 * @param string|null The reservation number for an order. This may be visible on the invoice
	 * @return self
	 */
	public function setReservationnumber($reservationnumber): self
	{
		$this->reservationnumber = $reservationnumber;
		return $this;
	}

	/**
	 * @param string|null The delivery option the customer selected, when PG or PGE is chosen the property pickup_address is filled with the pickup address. DHDLE may be applicable to German users who ordered using the DHL Checkout.
	 * @return self
	 */
	public function setDelivery_option($delivery_option): self
	{
		$this->delivery_option = $delivery_option;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\User Link to possible user resource associated with this order
	 * @return self
	 */
	public function setUser($user): self
	{
		$this->user = $user;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\Discountcoupon Link to possible discount coupon associated with this order
	 * @return self
	 */
	public function setDiscountcoupon($discountcoupon): self
	{
		$this->discountcoupon = $discountcoupon;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Entity\Personalinfo|null Describes personal information of the customer
	 * @return self
	 */
	public function setCustomer($customer): self
	{
		$this->customer = $customer;
		return $this;
	}

	/**
	 * @param object|null The pickup address that the customer selected
	 * @return self
	 */
	public function setPickup_address($pickup_address): self
	{
		$this->pickup_address = $pickup_address;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderrows Products that are ordered with this order
	 * @return self
	 */
	public function setOrderrows($orderrows): self
	{
		$this->orderrows = $orderrows;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotes Notes added to this order
	 * @return self
	 */
	public function setOrdernotes($ordernotes): self
	{
		$this->ordernotes = $ordernotes;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\Ordernotifications Order notifications are used to send e-mails of the different types. For instance, an order's invoice can be sent to the customer. GET will return all previous notifications created by the API. For now, notifications created automatically or by the merchant will not show up in the collections.
	 * @return self
	 */
	public function setOrdernotifications($ordernotifications): self
	{
		$this->ordernotifications = $ordernotifications;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\Orderaffiliatenetworks Affilate networks
	 * @return self
	 */
	public function setOrderaffiliatenetworks($orderaffiliatenetworks): self
	{
		$this->orderaffiliatenetworks = $orderaffiliatenetworks;
		return $this;
	}

	/**
	 * @param \JacobDeKeizer\Ccv\Models\Webshop\Resource\Invoices Invoices used for creating a new invoice.
	 * @return self
	 */
	public function setInvoices($invoices): self
	{
		$this->invoices = $invoices;
		return $this;
	}

}
