<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productvideos implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Product video id
     */
    private $id;

    /**
     * @var int Product video productid
     */
    private $productid;

    /**
     * @var string|null Product video name
     */
    private $name;

    /**
     * @var int Product video position
     */
    private $position;

    /**
     * @var string Product video embed code
     */
    private $embedcode;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\ParentItem|null Contains link to parent product
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
     * @return int Product video id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Product video productid
     */
    public function getProductid(): int
    {
        return $this->productid;
    }

    /**
     * @return string|null Product video name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int Product video position
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return string Product video embed code
     */
    public function getEmbedcode(): string
    {
        return $this->embedcode;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\ParentItem
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
     * @param int Product video id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int Product video productid
     * @return self
     */
    public function setProductid(int $productid): self
    {
        $this->productid = $productid;
        $this->propertyFilled('productid');
        return $this;
    }

    /**
     * @param string|null Product video name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param int Product video position
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param string Product video embed code
     * @return self
     */
    public function setEmbedcode(string $embedcode): self
    {
        $this->embedcode = $embedcode;
        $this->propertyFilled('embedcode');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\ParentItem|null Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Products\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
