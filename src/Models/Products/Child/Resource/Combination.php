<?php

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Combination implements Model
{
    use FromArray, ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Attribute Describes the attribute set.
     */
    private $attribute;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\AttributeValue Describes the attribute value in the attribute set.
     */
    private $attributeValue;

    /**
     * @var float The extra price that is calculated when selecting this attribute value.
     */
    private $extraPrice;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Attribute Describes the attribute set.
     */
    public function getAttribute(): \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Attribute
    {
        return $this->attribute;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\AttributeValue Describes the attribute value in the attribute set.
     */
    public function getAttributeValue(): \JacobDeKeizer\Ccv\Models\Products\Child\Resource\AttributeValue
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
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Attribute $attribute Describes the attribute set.
     * @return self
     */
    public function setAttribute(\JacobDeKeizer\Ccv\Models\Products\Child\Resource\Attribute $attribute): self
    {
        $this->attribute = $attribute;
        $this->propertyFilled('attribute');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\AttributeValue $attributeValue Describes the attribute value in the attribute set.
     * @return self
     */
    public function setAttributeValue(\JacobDeKeizer\Ccv\Models\Products\Child\Resource\AttributeValue $attributeValue): self
    {
        $this->attributeValue = $attributeValue;
        $this->propertyFilled('attributeValue');
        return $this;
    }

    /**
     * @param float $extraPrice The extra price that is calculated when selecting this attribute value.
     * @return self
     */
    public function setExtraPrice(float $extraPrice): self
    {
        $this->extraPrice = $extraPrice;
        $this->propertyFilled('extraPrice');
        return $this;
    }
}
