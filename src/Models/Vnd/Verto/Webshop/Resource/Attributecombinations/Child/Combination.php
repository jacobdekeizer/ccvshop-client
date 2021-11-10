<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Combination implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\Attribute Describes the attribute set.
     */
    private \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\Attribute $attribute;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\AttributeValue Describes the attribute value in the attribute set.
     */
    private \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\AttributeValue $attributeValue;

    /**
     * @var float The extra price that is calculated when selecting this attribute value.
     */
    private float $extraPrice;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\Attribute Describes the attribute set.
     */
    public function getAttribute(): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\Attribute
    {
        return $this->attribute;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\AttributeValue Describes the attribute value in the attribute set.
     */
    public function getAttributeValue(): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\AttributeValue
    {
        return $this->attributeValue;
    }

    /**
     * @return float The extra price that is calculated when selecting this attribute value.
     */
    public function getExtraPrice(): float
    {
        return $this->extraPrice;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\Attribute $attribute Describes the attribute set.
     * @return self
     */
    public function setAttribute(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\Attribute $attribute): self
    {
        $this->attribute = $attribute;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\AttributeValue $attributeValue Describes the attribute value in the attribute set.
     * @return self
     */
    public function setAttributeValue(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child\AttributeValue $attributeValue): self
    {
        $this->attributeValue = $attributeValue;
        return $this;
    }

    /**
     * @param float $extraPrice The extra price that is calculated when selecting this attribute value.
     * @return self
     */
    public function setExtraPrice(float $extraPrice): self
    {
        $this->extraPrice = $extraPrice;
        return $this;
    }
}
