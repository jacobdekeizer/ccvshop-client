<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Producttaxtariffexceptions implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Unique id of the resource.
     */
    private int $id;

    /**
     * @var int Unique id of the product
     */
    private int $productId;

    /**
     * @var string ISO 2Code for the country of the tax tariff exception.
     */
    private string $country;

    /**
     * @var string The tax tariff of the exception
     */
    private string $taxtariff;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions\Child\ParentItem|null Contains link to parent product
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions\Child\ParentItem $parent;

    public static function fromArray(array $data): static
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
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions\Child\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions\Child\ParentItem
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
        return $this;
    }

    /**
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $productId Unique id of the product
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @param string $country ISO 2Code for the country of the tax tariff exception.
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $taxtariff The tax tariff of the exception
     * @return self
     */
    public function setTaxtariff(string $taxtariff): self
    {
        $this->taxtariff = $taxtariff;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions\Child\ParentItem|null $parent Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Producttaxtariffexceptions\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
