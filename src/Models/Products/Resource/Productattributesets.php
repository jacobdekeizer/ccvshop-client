<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productattributesets implements Model
{
    use FromArray, ToArray;

    /**
     * @var int Attributeset id
     */
    private $id;

    /**
     * @var string Attributeset name
     */
    private $attributename;

    /**
     * @var int Attributeset position
     */
    private $attributeposition;

    /**
     * @var string Attributeset type
     */
    private $type;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Items[] Collection of attribute values
     */
    private $items;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent product
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
     * @return int Attributeset id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Attributeset name
     */
    public function getAttributename(): string
    {
        return $this->attributename;
    }

    /**
     * @return int Attributeset position
     */
    public function getAttributeposition(): int
    {
        return $this->attributeposition;
    }

    /**
     * @return string Attributeset type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Items[] Collection of attribute values
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param int Attributeset id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string Attributeset name
     * @return self
     */
    public function setAttributename(string $attributename): self
    {
        $this->attributename = $attributename;
        $this->propertyFilled('attributename');
        return $this;
    }

    /**
     * @param int Attributeset position
     * @return self
     */
    public function setAttributeposition(int $attributeposition): self
    {
        $this->attributeposition = $attributeposition;
        $this->propertyFilled('attributeposition');
        return $this;
    }

    /**
     * @param string Attributeset type
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Items[] Collection of attribute values
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        $this->propertyFilled('items');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'items') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Products\Child\Resource\Items::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
