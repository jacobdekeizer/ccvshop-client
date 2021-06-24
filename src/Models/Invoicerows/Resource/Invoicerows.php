<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoicerows\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Invoicerows implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var int Invoice row Id.
     */
    private $id;

    /**
     * @var string Id of the invoice associated with this row.
     */
    private $invoiceId;

    /**
     * @var string Product type of this invoice row. If the type is a deposit then taxrate will always be 0%.
     */
    private $productType;

    /**
     * @var string Product name.
     */
    private $productName;

    /**
     * @var string Product number.
     */
    private $productNumber;

    /**
     * @var string Product number from the attributecombination.
     */
    private $subProductNumber;

    /**
     * @var string SKU number from the attributecombination.
     */
    private $subSkuNumber;

    /**
     * @var string EAN number from the attributecombination.
     */
    private $subEanNumber;

    /**
     * @var int|null Unique product id.
     */
    private $productId;

    /**
     * @var string|null Link to product resource.
     */
    private $productHref;

    /**
     * @var float Quantity of products.
     */
    private $count;

    /**
     * @var float Product original price per unit.
     */
    private $price;

    /**
     * @var float Product purchase price per unit.
     */
    private $productPurchasePrice;

    /**
     * @var float Discount price per unit.
     */
    private $discount;

    /**
     * @var bool Custom product price. If true, this price is differnt from the product price for this invoice row.
     */
    private $customPrice;

    /**
     * @var float Tax percentage.
     */
    private $tax;

    /**
     * @var string Product unit.
     */
    private $unit;

    /**
     * @var float Product weight.
     */
    private $weight;

    /**
     * @var string Memo description of product.
     */
    private $memo;

    /**
     * @var int|null Package id. Depending on this ID, different shippingcosts will be calculated. See /:version/packages/. When value is null no shopping costs will be calculated.
     */
    private $packageId;

    /**
     * @var string Package name.
     */
    private $packageName;

    /**
     * @var string Stocklocation of product.
     */
    private $stockLocation;

    /**
     * @var string Product supplier.
     */
    private $supplier;

    /**
     * @var float Discount of user.
     */
    private $userDiscount;

    /**
     * @var float Product original price.
     */
    private $originalPrice;

    /**
     * @var float Product orignal price and discount.
     */
    private $sellingPrice;

    /**
     * @var float Product price without discount.
     */
    private $priceWithoutDiscount;

    /**
     * @var float Product price without discount, with attributes.
     */
    private $priceWithoutDiscountWithAttributes;

    /**
     * @var float Total invoice row price.
     */
    private $totalPrice;

    /**
     * @var float|null Total price from attributes.
     */
    private $totalExtraOptionPrice;

    /**
     * @var float Product price with attributes per unit.
     */
    private $priceWithAttributes;

    /**
     * @var float Total product price with attributes.
     */
    private $totalPriceWithAttributes;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Attributes[] Collection of the chosen attribute options of this invoice row.
     */
    private $attributes;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Orderrow Contains link to orderrow resource. Only availabe when an order was created from this quotation.
     */
    private $orderrow;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\ParentItem Contains link to parent resource.
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
     * @return string Link to self.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Invoice row Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Id of the invoice associated with this row.
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    /**
     * @return string Product type of this invoice row. If the type is a deposit then taxrate will always be 0%.
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * @return string Product name.
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return string Product number.
     */
    public function getProductNumber(): string
    {
        return $this->productNumber;
    }

    /**
     * @return string Product number from the attributecombination.
     */
    public function getSubProductNumber(): string
    {
        return $this->subProductNumber;
    }

    /**
     * @return string SKU number from the attributecombination.
     */
    public function getSubSkuNumber(): string
    {
        return $this->subSkuNumber;
    }

    /**
     * @return string EAN number from the attributecombination.
     */
    public function getSubEanNumber(): string
    {
        return $this->subEanNumber;
    }

    /**
     * @return int|null Unique product id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return string|null Link to product resource.
     */
    public function getProductHref(): ?string
    {
        return $this->productHref;
    }

    /**
     * @return float Quantity of products.
     */
    public function getCount(): float
    {
        return $this->count;
    }

    /**
     * @return float Product original price per unit.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float Product purchase price per unit.
     */
    public function getProductPurchasePrice(): float
    {
        return $this->productPurchasePrice;
    }

    /**
     * @return float Discount price per unit.
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return bool Custom product price. If true, this price is differnt from the product price for this invoice row.
     */
    public function getCustomPrice(): bool
    {
        return $this->customPrice;
    }

    /**
     * @return float Tax percentage.
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @return string Product unit.
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @return float Product weight.
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return string Memo description of product.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @return int|null Package id. Depending on this ID, different shippingcosts will be calculated. See /:version/packages/. When value is null no shopping costs will be calculated.
     */
    public function getPackageId(): ?int
    {
        return $this->packageId;
    }

    /**
     * @return string Package name.
     */
    public function getPackageName(): string
    {
        return $this->packageName;
    }

    /**
     * @return string Stocklocation of product.
     */
    public function getStockLocation(): string
    {
        return $this->stockLocation;
    }

    /**
     * @return string Product supplier.
     */
    public function getSupplier(): string
    {
        return $this->supplier;
    }

    /**
     * @return float Discount of user.
     */
    public function getUserDiscount(): float
    {
        return $this->userDiscount;
    }

    /**
     * @return float Product original price.
     */
    public function getOriginalPrice(): float
    {
        return $this->originalPrice;
    }

    /**
     * @return float Product orignal price and discount.
     */
    public function getSellingPrice(): float
    {
        return $this->sellingPrice;
    }

    /**
     * @return float Product price without discount.
     */
    public function getPriceWithoutDiscount(): float
    {
        return $this->priceWithoutDiscount;
    }

    /**
     * @return float Product price without discount, with attributes.
     */
    public function getPriceWithoutDiscountWithAttributes(): float
    {
        return $this->priceWithoutDiscountWithAttributes;
    }

    /**
     * @return float Total invoice row price.
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @return float|null Total price from attributes.
     */
    public function getTotalExtraOptionPrice(): ?float
    {
        return $this->totalExtraOptionPrice;
    }

    /**
     * @return float Product price with attributes per unit.
     */
    public function getPriceWithAttributes(): float
    {
        return $this->priceWithAttributes;
    }

    /**
     * @return float Total product price with attributes.
     */
    public function getTotalPriceWithAttributes(): float
    {
        return $this->totalPriceWithAttributes;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Attributes[] Collection of the chosen attribute options of this invoice row.
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Orderrow Contains link to orderrow resource. Only availabe when an order was created from this quotation.
     */
    public function getOrderrow(): \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Orderrow
    {
        return $this->orderrow;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\ParentItem Contains link to parent resource.
     */
    public function getParent(): \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\ParentItem
    {
        return $this->parent;
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
     * @param int $id Invoice row Id.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $invoiceId Id of the invoice associated with this row.
     * @return self
     */
    public function setInvoiceId(string $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        $this->propertyFilled('invoiceId');
        return $this;
    }

    /**
     * @param string $productType Product type of this invoice row. If the type is a deposit then taxrate will always be 0%.
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->productType = $productType;
        $this->propertyFilled('productType');
        return $this;
    }

    /**
     * @param string $productName Product name.
     * @return self
     */
    public function setProductName(string $productName): self
    {
        $this->productName = $productName;
        $this->propertyFilled('productName');
        return $this;
    }

    /**
     * @param string $productNumber Product number.
     * @return self
     */
    public function setProductNumber(string $productNumber): self
    {
        $this->productNumber = $productNumber;
        $this->propertyFilled('productNumber');
        return $this;
    }

    /**
     * @param string $subProductNumber Product number from the attributecombination.
     * @return self
     */
    public function setSubProductNumber(string $subProductNumber): self
    {
        $this->subProductNumber = $subProductNumber;
        $this->propertyFilled('subProductNumber');
        return $this;
    }

    /**
     * @param string $subSkuNumber SKU number from the attributecombination.
     * @return self
     */
    public function setSubSkuNumber(string $subSkuNumber): self
    {
        $this->subSkuNumber = $subSkuNumber;
        $this->propertyFilled('subSkuNumber');
        return $this;
    }

    /**
     * @param string $subEanNumber EAN number from the attributecombination.
     * @return self
     */
    public function setSubEanNumber(string $subEanNumber): self
    {
        $this->subEanNumber = $subEanNumber;
        $this->propertyFilled('subEanNumber');
        return $this;
    }

    /**
     * @param int|null $productId Unique product id.
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }

    /**
     * @param string|null $productHref Link to product resource.
     * @return self
     */
    public function setProductHref(?string $productHref): self
    {
        $this->productHref = $productHref;
        $this->propertyFilled('productHref');
        return $this;
    }

    /**
     * @param float $count Quantity of products.
     * @return self
     */
    public function setCount(float $count): self
    {
        $this->count = $count;
        $this->propertyFilled('count');
        return $this;
    }

    /**
     * @param float $price Product original price per unit.
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param float $productPurchasePrice Product purchase price per unit.
     * @return self
     */
    public function setProductPurchasePrice(float $productPurchasePrice): self
    {
        $this->productPurchasePrice = $productPurchasePrice;
        $this->propertyFilled('productPurchasePrice');
        return $this;
    }

    /**
     * @param float $discount Discount price per unit.
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param bool $customPrice Custom product price. If true, this price is differnt from the product price for this invoice row.
     * @return self
     */
    public function setCustomPrice(bool $customPrice): self
    {
        $this->customPrice = $customPrice;
        $this->propertyFilled('customPrice');
        return $this;
    }

    /**
     * @param float $tax Tax percentage.
     * @return self
     */
    public function setTax(float $tax): self
    {
        $this->tax = $tax;
        $this->propertyFilled('tax');
        return $this;
    }

    /**
     * @param string $unit Product unit.
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;
        $this->propertyFilled('unit');
        return $this;
    }

    /**
     * @param float $weight Product weight.
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        $this->propertyFilled('weight');
        return $this;
    }

    /**
     * @param string $memo Memo description of product.
     * @return self
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;
        $this->propertyFilled('memo');
        return $this;
    }

    /**
     * @param int|null $packageId Package id. Depending on this ID, different shippingcosts will be calculated. See /:version/packages/. When value is null no shopping costs will be calculated.
     * @return self
     */
    public function setPackageId(?int $packageId): self
    {
        $this->packageId = $packageId;
        $this->propertyFilled('packageId');
        return $this;
    }

    /**
     * @param string $packageName Package name.
     * @return self
     */
    public function setPackageName(string $packageName): self
    {
        $this->packageName = $packageName;
        $this->propertyFilled('packageName');
        return $this;
    }

    /**
     * @param string $stockLocation Stocklocation of product.
     * @return self
     */
    public function setStockLocation(string $stockLocation): self
    {
        $this->stockLocation = $stockLocation;
        $this->propertyFilled('stockLocation');
        return $this;
    }

    /**
     * @param string $supplier Product supplier.
     * @return self
     */
    public function setSupplier(string $supplier): self
    {
        $this->supplier = $supplier;
        $this->propertyFilled('supplier');
        return $this;
    }

    /**
     * @param float $userDiscount Discount of user.
     * @return self
     */
    public function setUserDiscount(float $userDiscount): self
    {
        $this->userDiscount = $userDiscount;
        $this->propertyFilled('userDiscount');
        return $this;
    }

    /**
     * @param float $originalPrice Product original price.
     * @return self
     */
    public function setOriginalPrice(float $originalPrice): self
    {
        $this->originalPrice = $originalPrice;
        $this->propertyFilled('originalPrice');
        return $this;
    }

    /**
     * @param float $sellingPrice Product orignal price and discount.
     * @return self
     */
    public function setSellingPrice(float $sellingPrice): self
    {
        $this->sellingPrice = $sellingPrice;
        $this->propertyFilled('sellingPrice');
        return $this;
    }

    /**
     * @param float $priceWithoutDiscount Product price without discount.
     * @return self
     */
    public function setPriceWithoutDiscount(float $priceWithoutDiscount): self
    {
        $this->priceWithoutDiscount = $priceWithoutDiscount;
        $this->propertyFilled('priceWithoutDiscount');
        return $this;
    }

    /**
     * @param float $priceWithoutDiscountWithAttributes Product price without discount, with attributes.
     * @return self
     */
    public function setPriceWithoutDiscountWithAttributes(float $priceWithoutDiscountWithAttributes): self
    {
        $this->priceWithoutDiscountWithAttributes = $priceWithoutDiscountWithAttributes;
        $this->propertyFilled('priceWithoutDiscountWithAttributes');
        return $this;
    }

    /**
     * @param float $totalPrice Total invoice row price.
     * @return self
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        $this->propertyFilled('totalPrice');
        return $this;
    }

    /**
     * @param float|null $totalExtraOptionPrice Total price from attributes.
     * @return self
     */
    public function setTotalExtraOptionPrice(?float $totalExtraOptionPrice): self
    {
        $this->totalExtraOptionPrice = $totalExtraOptionPrice;
        $this->propertyFilled('totalExtraOptionPrice');
        return $this;
    }

    /**
     * @param float $priceWithAttributes Product price with attributes per unit.
     * @return self
     */
    public function setPriceWithAttributes(float $priceWithAttributes): self
    {
        $this->priceWithAttributes = $priceWithAttributes;
        $this->propertyFilled('priceWithAttributes');
        return $this;
    }

    /**
     * @param float $totalPriceWithAttributes Total product price with attributes.
     * @return self
     */
    public function setTotalPriceWithAttributes(float $totalPriceWithAttributes): self
    {
        $this->totalPriceWithAttributes = $totalPriceWithAttributes;
        $this->propertyFilled('totalPriceWithAttributes');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Attributes[] $attributes Collection of the chosen attribute options of this invoice row.
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        $this->propertyFilled('attributes');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Orderrow $orderrow Contains link to orderrow resource. Only availabe when an order was created from this quotation.
     * @return self
     */
    public function setOrderrow(\JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Orderrow $orderrow): self
    {
        $this->orderrow = $orderrow;
        $this->propertyFilled('orderrow');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\ParentItem $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(\JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'attributes') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource\Attributes::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
