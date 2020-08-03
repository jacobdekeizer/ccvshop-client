<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productrelevant implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var int Unique id of the child product. This is product will show on the parent product page as a relevant product.
     */
    private $childProductId;

    /**
     * @var int Unique id of the parent product. This is product will show all the child product on the product page as relevant products.
     */
    private $parentProductId;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ChildProduct|null The child product
     */
    private $childProduct;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentProduct|null The parent product
     */
    private $parentProduct;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return int Unique id of the child product. This is product will show on the parent product page as a relevant product.
     */
    public function getChildProductId(): int
    {
        return $this->childProductId;
    }

    /**
     * @return int Unique id of the parent product. This is product will show all the child product on the product page as relevant products.
     */
    public function getParentProductId(): int
    {
        return $this->parentProductId;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ChildProduct|null The child product
     */
    public function getChildProduct(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ChildProduct
    {
        return $this->childProduct;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentProduct|null The parent product
     */
    public function getParentProduct(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentProduct
    {
        return $this->parentProduct;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int Unique id of the child product. This is product will show on the parent product page as a relevant product.
     * @return self
     */
    public function setChildProductId(int $childProductId): self
    {
        $this->childProductId = $childProductId;
        $this->propertyFilled('childProductId');
        return $this;
    }

    /**
     * @param int Unique id of the parent product. This is product will show all the child product on the product page as relevant products.
     * @return self
     */
    public function setParentProductId(int $parentProductId): self
    {
        $this->parentProductId = $parentProductId;
        $this->propertyFilled('parentProductId');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ChildProduct|null The child product
     * @return self
     */
    public function setChildProduct(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ChildProduct $childProduct): self
    {
        $this->childProduct = $childProduct;
        $this->propertyFilled('childProduct');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentProduct|null The parent product
     * @return self
     */
    public function setParentProduct(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentProduct $parentProduct): self
    {
        $this->parentProduct = $parentProduct;
        $this->propertyFilled('parentProduct');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
