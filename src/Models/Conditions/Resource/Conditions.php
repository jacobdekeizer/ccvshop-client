<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Conditions\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Conditions implements Model
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
     * @var string|null Condition Name
     */
    private $name;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\Products|null Collection of products that have this condition.
     */
    private $products;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return string|null Condition Name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\Products|null Collection of products that have this condition.
     */
    public function getProducts(): ?\JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\Products
    {
        return $this->products;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\ParentItem
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
     * @param string|null $name Condition Name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\Products|null $products Collection of products that have this condition.
     * @return self
     */
    public function setProducts(?\JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\Products $products): self
    {
        $this->products = $products;
        $this->propertyFilled('products');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Conditions\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}