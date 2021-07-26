<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributecombinations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var string A description of the attribute combination
     */
    private $note;

    /**
     * @var int Unique product id of the resource
     */
    private $productId;

    /**
     * @var float The stock of a product combination
     */
    private $stock;

    /**
     * @var float The summ of all extra prices of the attribute values which build up this combination. This can also be a negative number.
     */
    private $nettoExtraPrice;

    /**
     * @var string Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting. See the resource /webshop/:id/settings -> ordering_without_stock.
     */
    private $orderingWithoutStock;

    /**
     * @var string The product number
     */
    private $productNumber;

    /**
     * @var string The ean number
     */
    private $eanNumber;

    /**
     * @var string The sku number
     */
    private $skuNumber;

    /**
     * @var int Expected delivery time, number of days, weeks, months, quarters, years
     */
    private $deliveryTime;

    /**
     * @var string Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     */
    private $deliveryTimeType;

    /**
     * @var string The delivery time default in text
     */
    private $deliveryDefaultText;

    /**
     * @var bool If this combination is active. Inactive combinations can not be selected by the customer.
     */
    private $active;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Combination[] Collection of attribute values that combined create this attribute combination.
     */
    private $combination;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributecombinationphotos Attribute combination photos
     */
    private $attributecombinationphotos;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributes Collection of attributes
     */
    private $attributes;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributevalues Collection of  attributevalues
     */
    private $attributevalues;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem Contains link to parent resource.
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
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string A description of the attribute combination
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @return int Unique product id of the resource
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return float The stock of a product combination
     */
    public function getStock(): float
    {
        return $this->stock;
    }

    /**
     * @return float The summ of all extra prices of the attribute values which build up this combination. This can also be a negative number.
     */
    public function getNettoExtraPrice(): float
    {
        return $this->nettoExtraPrice;
    }

    /**
     * @return string Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting. See the resource /webshop/:id/settings -> ordering_without_stock.
     */
    public function getOrderingWithoutStock(): string
    {
        return $this->orderingWithoutStock;
    }

    /**
     * @return string The product number
     */
    public function getProductNumber(): string
    {
        return $this->productNumber;
    }

    /**
     * @return string The ean number
     */
    public function getEanNumber(): string
    {
        return $this->eanNumber;
    }

    /**
     * @return string The sku number
     */
    public function getSkuNumber(): string
    {
        return $this->skuNumber;
    }

    /**
     * @return int Expected delivery time, number of days, weeks, months, quarters, years
     */
    public function getDeliveryTime(): int
    {
        return $this->deliveryTime;
    }

    /**
     * @return string Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     */
    public function getDeliveryTimeType(): string
    {
        return $this->deliveryTimeType;
    }

    /**
     * @return string The delivery time default in text
     */
    public function getDeliveryDefaultText(): string
    {
        return $this->deliveryDefaultText;
    }

    /**
     * @return bool If this combination is active. Inactive combinations can not be selected by the customer.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Combination[] Collection of attribute values that combined create this attribute combination.
     */
    public function getCombination(): array
    {
        return $this->combination;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributecombinationphotos Attribute combination photos
     */
    public function getAttributecombinationphotos(): \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributecombinationphotos
    {
        return $this->attributecombinationphotos;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributes Collection of attributes
     */
    public function getAttributes(): \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributes
    {
        return $this->attributes;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributevalues Collection of  attributevalues
     */
    public function getAttributevalues(): \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributevalues
    {
        return $this->attributevalues;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem Contains link to parent resource.
     */
    public function getParent(): \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem
    {
        return $this->parent;
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
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $note A description of the attribute combination
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->note = $note;
        $this->propertyFilled('note');
        return $this;
    }

    /**
     * @param int $productId Unique product id of the resource
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }

    /**
     * @param float $stock The stock of a product combination
     * @return self
     */
    public function setStock(float $stock): self
    {
        $this->stock = $stock;
        $this->propertyFilled('stock');
        return $this;
    }

    /**
     * @param float $nettoExtraPrice The summ of all extra prices of the attribute values which build up this combination. This can also be a negative number.
     * @return self
     */
    public function setNettoExtraPrice(float $nettoExtraPrice): self
    {
        $this->nettoExtraPrice = $nettoExtraPrice;
        $this->propertyFilled('nettoExtraPrice');
        return $this;
    }

    /**
     * @param string $orderingWithoutStock Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting. See the resource /webshop/:id/settings -> ordering_without_stock.
     * @return self
     */
    public function setOrderingWithoutStock(string $orderingWithoutStock): self
    {
        $this->orderingWithoutStock = $orderingWithoutStock;
        $this->propertyFilled('orderingWithoutStock');
        return $this;
    }

    /**
     * @param string $productNumber The product number
     * @return self
     */
    public function setProductNumber(string $productNumber): self
    {
        $this->productNumber = $productNumber;
        $this->propertyFilled('productNumber');
        return $this;
    }

    /**
     * @param string $eanNumber The ean number
     * @return self
     */
    public function setEanNumber(string $eanNumber): self
    {
        $this->eanNumber = $eanNumber;
        $this->propertyFilled('eanNumber');
        return $this;
    }

    /**
     * @param string $skuNumber The sku number
     * @return self
     */
    public function setSkuNumber(string $skuNumber): self
    {
        $this->skuNumber = $skuNumber;
        $this->propertyFilled('skuNumber');
        return $this;
    }

    /**
     * @param int $deliveryTime Expected delivery time, number of days, weeks, months, quarters, years
     * @return self
     */
    public function setDeliveryTime(int $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        $this->propertyFilled('deliveryTime');
        return $this;
    }

    /**
     * @param string $deliveryTimeType Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     * @return self
     */
    public function setDeliveryTimeType(string $deliveryTimeType): self
    {
        $this->deliveryTimeType = $deliveryTimeType;
        $this->propertyFilled('deliveryTimeType');
        return $this;
    }

    /**
     * @param string $deliveryDefaultText The delivery time default in text
     * @return self
     */
    public function setDeliveryDefaultText(string $deliveryDefaultText): self
    {
        $this->deliveryDefaultText = $deliveryDefaultText;
        $this->propertyFilled('deliveryDefaultText');
        return $this;
    }

    /**
     * @param bool $active If this combination is active. Inactive combinations can not be selected by the customer.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Combination[] $combination Collection of attribute values that combined create this attribute combination.
     * @return self
     */
    public function setCombination(array $combination): self
    {
        $this->combination = $combination;
        $this->propertyFilled('combination');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributecombinationphotos $attributecombinationphotos Attribute combination photos
     * @return self
     */
    public function setAttributecombinationphotos(\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributecombinationphotos $attributecombinationphotos): self
    {
        $this->attributecombinationphotos = $attributecombinationphotos;
        $this->propertyFilled('attributecombinationphotos');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributes $attributes Collection of attributes
     * @return self
     */
    public function setAttributes(\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributes $attributes): self
    {
        $this->attributes = $attributes;
        $this->propertyFilled('attributes');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributevalues $attributevalues Collection of  attributevalues
     * @return self
     */
    public function setAttributevalues(\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Attributevalues $attributevalues): self
    {
        $this->attributevalues = $attributevalues;
        $this->propertyFilled('attributevalues');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'combination') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\Combination::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
