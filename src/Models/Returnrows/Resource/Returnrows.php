<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Returnrows\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Returnrows implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self.
     */
    private $href;
    
    /**
     * @var int Return row Id
     */
    private $id;
    
    /**
     * @var int Return Id.
     */
    private $returnId;
    
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
     * @var bool Custom product price. If true, this price is differnt from the product price for this return row.
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
     * @var float Total return row price.
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
     * @var \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Attributes[] Collection of the chosen attribute options of this return row.
     */
    private $attributes;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Product Contains link to product resource.
     */
    private $product;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Orderrow Contains link to orderrow resource.
     */
    private $orderrow;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\ParentItem Contains link to parent resource.
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
     * @return int Return row Id
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return int Return Id.
     */
    public function getReturnId(): int
    {
        return $this->returnId;
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
     * @return bool Custom product price. If true, this price is differnt from the product price for this return row.
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
     * @return float Total return row price.
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
     * @return \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Attributes[] Collection of the chosen attribute options of this return row.
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Product Contains link to product resource.
     */
    public function getProduct(): \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Product
    {
        return $this->product;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Orderrow Contains link to orderrow resource.
     */
    public function getOrderrow(): \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Orderrow
    {
        return $this->orderrow;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\ParentItem Contains link to parent resource.
     */
    public function getParent(): \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\ParentItem
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
     * @param int $id Return row Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param int $returnId Return Id.
     * @return self
     */
    public function setReturnId(int $returnId): self
    {
        $this->returnId = $returnId;
        $this->propertyFilled('returnId');
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
     * @param bool $customPrice Custom product price. If true, this price is differnt from the product price for this return row.
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
     * @param float $totalPrice Total return row price.
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
     * @param \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Attributes[] $attributes Collection of the chosen attribute options of this return row.
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        $this->propertyFilled('attributes');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Product $product Contains link to product resource.
     * @return self
     */
    public function setProduct(\JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Product $product): self
    {
        $this->product = $product;
        $this->propertyFilled('product');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Orderrow $orderrow Contains link to orderrow resource.
     * @return self
     */
    public function setOrderrow(\JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Orderrow $orderrow): self
    {
        $this->orderrow = $orderrow;
        $this->propertyFilled('orderrow');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\ParentItem $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(\JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\ParentItem $parent): self
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
                $items[] = \JacobDeKeizer\Ccv\Models\Returnrows\Child\Resource\Attributes::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
