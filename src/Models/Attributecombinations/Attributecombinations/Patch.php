<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Attributecombinations\Attributecombinations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null A description of the attribute combination
     */
    private $note;

    /**
     * @var float|null The stock of a product combination
     */
    private $stock;

    /**
     * @var string|null The product number
     */
    private $productNumber;

    /**
     * @var string|null The ean number
     */
    private $eanNumber;

    /**
     * @var string|null The sku number
     */
    private $skuNumber;

    /**
     * @var int|null Expected delivery time, number of days, weeks, months, quarters, years
     */
    private $deliveryTime;

    /**
     * @var string|null Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     */
    private $deliveryTimeType;

    /**
     * @var string|null The delivery time default in text
     */
    private $deliveryDefaultText;

    /**
     * @var bool|null Is active
     */
    private $active;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null A description of the attribute combination
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @return float|null The stock of a product combination
     */
    public function getStock(): ?float
    {
        return $this->stock;
    }

    /**
     * @return string|null The product number
     */
    public function getProductNumber(): ?string
    {
        return $this->productNumber;
    }

    /**
     * @return string|null The ean number
     */
    public function getEanNumber(): ?string
    {
        return $this->eanNumber;
    }

    /**
     * @return string|null The sku number
     */
    public function getSkuNumber(): ?string
    {
        return $this->skuNumber;
    }

    /**
     * @return int|null Expected delivery time, number of days, weeks, months, quarters, years
     */
    public function getDeliveryTime(): ?int
    {
        return $this->deliveryTime;
    }

    /**
     * @return string|null Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     */
    public function getDeliveryTimeType(): ?string
    {
        return $this->deliveryTimeType;
    }

    /**
     * @return string|null The delivery time default in text
     */
    public function getDeliveryDefaultText(): ?string
    {
        return $this->deliveryDefaultText;
    }

    /**
     * @return bool|null Is active
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param string|null $note A description of the attribute combination
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        $this->propertyFilled('note');
        return $this;
    }

    /**
     * @param float|null $stock The stock of a product combination
     * @return self
     */
    public function setStock(?float $stock): self
    {
        $this->stock = $stock;
        $this->propertyFilled('stock');
        return $this;
    }

    /**
     * @param string|null $productNumber The product number
     * @return self
     */
    public function setProductNumber(?string $productNumber): self
    {
        $this->productNumber = $productNumber;
        $this->propertyFilled('productNumber');
        return $this;
    }

    /**
     * @param string|null $eanNumber The ean number
     * @return self
     */
    public function setEanNumber(?string $eanNumber): self
    {
        $this->eanNumber = $eanNumber;
        $this->propertyFilled('eanNumber');
        return $this;
    }

    /**
     * @param string|null $skuNumber The sku number
     * @return self
     */
    public function setSkuNumber(?string $skuNumber): self
    {
        $this->skuNumber = $skuNumber;
        $this->propertyFilled('skuNumber');
        return $this;
    }

    /**
     * @param int|null $deliveryTime Expected delivery time, number of days, weeks, months, quarters, years
     * @return self
     */
    public function setDeliveryTime(?int $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        $this->propertyFilled('deliveryTime');
        return $this;
    }

    /**
     * @param string|null $deliveryTimeType Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     * @return self
     */
    public function setDeliveryTimeType(?string $deliveryTimeType): self
    {
        $this->deliveryTimeType = $deliveryTimeType;
        $this->propertyFilled('deliveryTimeType');
        return $this;
    }

    /**
     * @param string|null $deliveryDefaultText The delivery time default in text
     * @return self
     */
    public function setDeliveryDefaultText(?string $deliveryDefaultText): self
    {
        $this->deliveryDefaultText = $deliveryDefaultText;
        $this->propertyFilled('deliveryDefaultText');
        return $this;
    }

    /**
     * @param bool|null $active Is active
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }
}
