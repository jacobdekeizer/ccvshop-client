<?php

namespace JacobDeKeizer\Ccv\Models\Attributes\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributes implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string|null Attribute name
     */
    private $name;

    /**
     * @var int|null Deprecated. Use property 'type' instead. Type of attribute. 1. Pulldown with Attribute values. 2. Text field (optional). 3. Text field (required). 4. Pulldown with Attribute values (required). 5. Additional menu. 6.Additional menu (required)
     */
    private $attributeType;

    /**
     * @var string|null Attribute type. Option menu is a dropdown menu where items can be selected. Text is an inputfield. Additional menus will not be used to calculate attribute combinations.
     */
    private $type;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\AttributeValues|null Values linked to this attribute. This collection is empty with attribute_type 'text' and 'text_required'.
     */
    private $attributeValues;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Attribute name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null Deprecated. Use property 'type' instead. Type of attribute. 1. Pulldown with Attribute values. 2. Text field (optional). 3. Text field (required). 4. Pulldown with Attribute values (required). 5. Additional menu. 6.Additional menu (required)
     */
    public function getAttributeType(): ?int
    {
        return $this->attributeType;
    }

    /**
     * @return string|null Attribute type. Option menu is a dropdown menu where items can be selected. Text is an inputfield. Additional menus will not be used to calculate attribute combinations.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\AttributeValues|null Values linked to this attribute. This collection is empty with attribute_type 'text' and 'text_required'.
     */
    public function getAttributeValues(): ?\JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\AttributeValues
    {
        return $this->attributeValues;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $name Attribute name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param int|null $attributeType Deprecated. Use property 'type' instead. Type of attribute. 1. Pulldown with Attribute values. 2. Text field (optional). 3. Text field (required). 4. Pulldown with Attribute values (required). 5. Additional menu. 6.Additional menu (required)
     * @return self
     */
    public function setAttributeType(?int $attributeType): self
    {
        $this->attributeType = $attributeType;
        $this->propertyFilled('attributeType');
        return $this;
    }

    /**
     * @param string|null $type Attribute type. Option menu is a dropdown menu where items can be selected. Text is an inputfield. Additional menus will not be used to calculate attribute combinations.
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\AttributeValues|null $attributeValues Values linked to this attribute. This collection is empty with attribute_type 'text' and 'text_required'.
     * @return self
     */
    public function setAttributeValues(?\JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\AttributeValues $attributeValues): self
    {
        $this->attributeValues = $attributeValues;
        $this->propertyFilled('attributeValues');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Attributes\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
