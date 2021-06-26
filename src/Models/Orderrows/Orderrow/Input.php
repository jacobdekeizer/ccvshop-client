<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderrows\Orderrow;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Product type of this orderrow. If the type is a deposit then VAT will always be 0%. If not included then product will be the default.
     */
    private $productType;
    
    /**
     * @var bool|null Default: true. When true and when the product has a deposit price (either container or safety) these additional order rows will automatically be created.
     */
    private $autoCreateDepositRows;
    
    /**
     * @var int|null Unique product id. If provided product data will be used to create an order row.
     */
    private $productId;
    
    /**
     * @var string|null Product name. Only used if product_id is empty
     */
    private $productName;
    
    /**
     * @var string|null Product number. Only used if product_id is empty
     */
    private $productNumber;
    
    /**
     * @var float Quantity of products
     */
    private $count;
    
    /**
     * @var float|null Product sell price. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $price;
    
    /**
     * @var float|null Product purchase price. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $productPurchasePrice;
    
    /**
     * @var float|null Discount. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $discount;
    
    /**
     * @var float|null Tax percentage. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $tax;
    
    /**
     * @var string|null Product unit. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $unit;
    
    /**
     * @var float|null Product weight. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $weight;
    
    /**
     * @var string|null Memo description of product. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    private $memo;
    
    /**
     * @var int|null Package id. Depending on this ID, different shippingcosts will be calculated. Required if product_id is empty. See /:version/packages/
     */
    private $packageId;
    
    /**
     * @var float|null This should be filled if this order rows has an attribute combination. The associated attributes value with this id will be added to this row.
     */
    private $attributeCombinationId;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Product type of this orderrow. If the type is a deposit then VAT will always be 0%. If not included then product will be the default.
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    
    /**
     * @return bool|null Default: true. When true and when the product has a deposit price (either container or safety) these additional order rows will automatically be created.
     */
    public function getAutoCreateDepositRows(): ?bool
    {
        return $this->autoCreateDepositRows;
    }
    
    /**
     * @return int|null Unique product id. If provided product data will be used to create an order row.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }
    
    /**
     * @return string|null Product name. Only used if product_id is empty
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }
    
    /**
     * @return string|null Product number. Only used if product_id is empty
     */
    public function getProductNumber(): ?string
    {
        return $this->productNumber;
    }
    
    /**
     * @return float Quantity of products
     */
    public function getCount(): float
    {
        return $this->count;
    }
    
    /**
     * @return float|null Product sell price. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    
    /**
     * @return float|null Product purchase price. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getProductPurchasePrice(): ?float
    {
        return $this->productPurchasePrice;
    }
    
    /**
     * @return float|null Discount. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }
    
    /**
     * @return float|null Tax percentage. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }
    
    /**
     * @return string|null Product unit. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    
    /**
     * @return float|null Product weight. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    
    /**
     * @return string|null Memo description of product. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }
    
    /**
     * @return int|null Package id. Depending on this ID, different shippingcosts will be calculated. Required if product_id is empty. See /:version/packages/
     */
    public function getPackageId(): ?int
    {
        return $this->packageId;
    }
    
    /**
     * @return float|null This should be filled if this order rows has an attribute combination. The associated attributes value with this id will be added to this row.
     */
    public function getAttributeCombinationId(): ?float
    {
        return $this->attributeCombinationId;
    }
    
    /**
     * @param string|null $productType Product type of this orderrow. If the type is a deposit then VAT will always be 0%. If not included then product will be the default.
     * @return self
     */
    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;
        $this->propertyFilled('productType');
        return $this;
    }
    
    /**
     * @param bool|null $autoCreateDepositRows Default: true. When true and when the product has a deposit price (either container or safety) these additional order rows will automatically be created.
     * @return self
     */
    public function setAutoCreateDepositRows(?bool $autoCreateDepositRows): self
    {
        $this->autoCreateDepositRows = $autoCreateDepositRows;
        $this->propertyFilled('autoCreateDepositRows');
        return $this;
    }
    
    /**
     * @param int|null $productId Unique product id. If provided product data will be used to create an order row.
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }
    
    /**
     * @param string|null $productName Product name. Only used if product_id is empty
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        $this->propertyFilled('productName');
        return $this;
    }
    
    /**
     * @param string|null $productNumber Product number. Only used if product_id is empty
     * @return self
     */
    public function setProductNumber(?string $productNumber): self
    {
        $this->productNumber = $productNumber;
        $this->propertyFilled('productNumber');
        return $this;
    }
    
    /**
     * @param float $count Quantity of products
     * @return self
     */
    public function setCount(float $count): self
    {
        $this->count = $count;
        $this->propertyFilled('count');
        return $this;
    }
    
    /**
     * @param float|null $price Product sell price. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
    
    /**
     * @param float|null $productPurchasePrice Product purchase price. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setProductPurchasePrice(?float $productPurchasePrice): self
    {
        $this->productPurchasePrice = $productPurchasePrice;
        $this->propertyFilled('productPurchasePrice');
        return $this;
    }
    
    /**
     * @param float|null $discount Discount. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }
    
    /**
     * @param float|null $tax Tax percentage. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setTax(?float $tax): self
    {
        $this->tax = $tax;
        $this->propertyFilled('tax');
        return $this;
    }
    
    /**
     * @param string|null $unit Product unit. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        $this->propertyFilled('unit');
        return $this;
    }
    
    /**
     * @param float|null $weight Product weight. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        $this->propertyFilled('weight');
        return $this;
    }
    
    /**
     * @param string|null $memo Memo description of product. Should be included if product_id is null. If product_id is provided this value will used instead of the product data.
     * @return self
     */
    public function setMemo(?string $memo): self
    {
        $this->memo = $memo;
        $this->propertyFilled('memo');
        return $this;
    }
    
    /**
     * @param int|null $packageId Package id. Depending on this ID, different shippingcosts will be calculated. Required if product_id is empty. See /:version/packages/
     * @return self
     */
    public function setPackageId(?int $packageId): self
    {
        $this->packageId = $packageId;
        $this->propertyFilled('packageId');
        return $this;
    }
    
    /**
     * @param float|null $attributeCombinationId This should be filled if this order rows has an attribute combination. The associated attributes value with this id will be added to this row.
     * @return self
     */
    public function setAttributeCombinationId(?float $attributeCombinationId): self
    {
        $this->attributeCombinationId = $attributeCombinationId;
        $this->propertyFilled('attributeCombinationId');
        return $this;
    }
}
