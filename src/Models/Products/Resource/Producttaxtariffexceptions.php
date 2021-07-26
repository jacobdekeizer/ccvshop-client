<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Producttaxtariffexceptions implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource.
     */
    private $id;

    /**
     * @var int Unique id of the product
     */
    private $productId;

    /**
     * @var string ISO 2Code for the country of the tax tariff exception.
     */
    private $country;

    /**
     * @var string The tax tariff of the exception
     */
    private $taxtariff;

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
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Unique id of the product
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return string ISO 2Code for the country of the tax tariff exception.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string The tax tariff of the exception
     */
    public function getTaxtariff(): string
    {
        return $this->taxtariff;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem
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
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int $productId Unique id of the product
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }

    /**
     * @param string $country ISO 2Code for the country of the tax tariff exception.
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        $this->propertyFilled('country');
        return $this;
    }

    /**
     * @param string $taxtariff The tax tariff of the exception
     * @return self
     */
    public function setTaxtariff(string $taxtariff): self
    {
        $this->taxtariff = $taxtariff;
        $this->propertyFilled('taxtariff');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null $parent Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
