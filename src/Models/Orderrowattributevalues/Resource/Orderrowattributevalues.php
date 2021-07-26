<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orderrowattributevalues implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int|null Order row attribute value Id
     */
    private $id;

    /**
     * @var string|null Name of the option (attribute)
     */
    private $optionName;

    /**
     * @var string|null Name of the attribute value
     */
    private $valueName;

    /**
     * @var float|null Extra price added to the order row.
     */
    private $price;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return int|null Order row attribute value Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Name of the option (attribute)
     */
    public function getOptionName(): ?string
    {
        return $this->optionName;
    }

    /**
     * @return string|null Name of the attribute value
     */
    public function getValueName(): ?string
    {
        return $this->valueName;
    }

    /**
     * @return float|null Extra price added to the order row.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null $id Order row attribute value Id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $optionName Name of the option (attribute)
     * @return self
     */
    public function setOptionName(?string $optionName): self
    {
        $this->optionName = $optionName;
        $this->propertyFilled('optionName');
        return $this;
    }

    /**
     * @param string|null $valueName Name of the attribute value
     * @return self
     */
    public function setValueName(?string $valueName): self
    {
        $this->valueName = $valueName;
        $this->propertyFilled('valueName');
        return $this;
    }

    /**
     * @param float|null $price Extra price added to the order row.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
