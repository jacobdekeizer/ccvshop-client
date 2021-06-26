<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Attributevalues\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributevalues implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var int|null Unique id of the resource
     */
    private $id;
    
    /**
     * @var string|null Package name
     */
    private $name;
    
    /**
     * @var float|null Default price of this value.
     */
    private $defaultPrice;
    
    /**
     * @var int|null Id of the attribute to which this value belongs.
     */
    private $attributeId;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Attributevalues\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return string|null Package name
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @return float|null Default price of this value.
     */
    public function getDefaultPrice(): ?float
    {
        return $this->defaultPrice;
    }
    
    /**
     * @return int|null Id of the attribute to which this value belongs.
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Attributevalues\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Attributevalues\Child\Resource\ParentItem
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
     * @param string|null $name Package name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param float|null $defaultPrice Default price of this value.
     * @return self
     */
    public function setDefaultPrice(?float $defaultPrice): self
    {
        $this->defaultPrice = $defaultPrice;
        $this->propertyFilled('defaultPrice');
        return $this;
    }
    
    /**
     * @param int|null $attributeId Id of the attribute to which this value belongs.
     * @return self
     */
    public function setAttributeId(?int $attributeId): self
    {
        $this->attributeId = $attributeId;
        $this->propertyFilled('attributeId');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Attributevalues\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Attributevalues\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
