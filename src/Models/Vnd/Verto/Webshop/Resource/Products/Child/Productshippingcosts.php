<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Products\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productshippingcosts implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var float Indication of shipping costs if only one item would be baught and shipped to the default country.
     */
    private float $costs;

    /**
     * @var string|null This is the default country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     */
    private ?string $defaultCountry;

    /**
     * @var float Quantity of items shipped. Default is 1. Can be changed with parameters.
     */
    private float $quantity;

    /**
     * @var string Link to collection of product shipping costs.
     */
    private string $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productshippingcosts\Productshippingcosts[] Array with collection items
     */
    private array $collection;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return float Indication of shipping costs if only one item would be baught and shipped to the default country.
     */
    public function getCosts(): float
    {
        return $this->costs;
    }

    /**
     * @return string|null This is the default country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     */
    public function getDefaultCountry(): ?string
    {
        return $this->defaultCountry;
    }

    /**
     * @return float Quantity of items shipped. Default is 1. Can be changed with parameters.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @return string Link to collection of product shipping costs.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productshippingcosts\Productshippingcosts[] Array with collection items
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param float $costs Indication of shipping costs if only one item would be baught and shipped to the default country.
     * @return self
     */
    public function setCosts(float $costs): self
    {
        $this->costs = $costs;
        return $this;
    }

    /**
     * @param string|null $defaultCountry This is the default country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     * @return self
     */
    public function setDefaultCountry(?string $defaultCountry): self
    {
        $this->defaultCountry = $defaultCountry;
        return $this;
    }

    /**
     * @param float $quantity Quantity of items shipped. Default is 1. Can be changed with parameters.
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param string $href Link to collection of product shipping costs.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productshippingcosts\Productshippingcosts ...$collection $collection Array with collection items
     * @return self
     */
    public function setCollection(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productshippingcosts\Productshippingcosts ...$collection): self
    {
        $this->collection = $collection;
        return $this;
    }
}
