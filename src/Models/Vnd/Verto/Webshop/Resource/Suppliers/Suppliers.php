<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Suppliers implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var int|null Unique id of the resource
     */
    private ?int $id;

    /**
     * @var string|null Supplier Name
     */
    private ?string $name;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\Products|null Collection of products that have this supplier.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\Products $products;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\ParentItem|null Parent resource of this resource
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return string|null Supplier Name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\Products|null Collection of products that have this supplier.
     */
    public function getProducts(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\Products
    {
        return $this->products;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\ParentItem
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
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $name Supplier Name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\Products|null $products Collection of products that have this supplier.
     * @return self
     */
    public function setProducts(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\Products $products): self
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Suppliers\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}