<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Marktplaatscategories\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Marktplaatscategories implements Model
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
     * @var string|null Marktplaats category name
     */
    private $name;

    /**
     * @var string|null The marktplaats category name of the parent of this category
     */
    private $parentName;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return string|null Marktplaats category name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null The marktplaats category name of the parent of this category
     */
    public function getParentName(): ?string
    {
        return $this->parentName;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Marktplaatscategories\Child\Resource\ParentItem
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
     * @param string|null $name Marktplaats category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $parentName The marktplaats category name of the parent of this category
     * @return self
     */
    public function setParentName(?string $parentName): self
    {
        $this->parentName = $parentName;
        $this->propertyFilled('parentName');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Child\Resource\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Marktplaatscategories\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
