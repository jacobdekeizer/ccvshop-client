<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productshippingcosts implements Model
{
    use FromArray, ToArray;

    /**
     * @var float Indication of shipping costs if the quantity of items would be baught and shipped to this country.
     */
    private $costs;

    /**
     * @var float Quantity of items shipped. Default is 1. Can be changed with parameters.
     */
    private $quantity;

    /**
     * @var string This is the country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     */
    private $country;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return float Indication of shipping costs if the quantity of items would be baught and shipped to this country.
     */
    public function getCosts(): float
    {
        return $this->costs;
    }

    /**
     * @return float Quantity of items shipped. Default is 1. Can be changed with parameters.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @return string This is the country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param float $costs Indication of shipping costs if the quantity of items would be baught and shipped to this country.
     * @return self
     */
    public function setCosts(float $costs): self
    {
        $this->costs = $costs;
        $this->propertyFilled('costs');
        return $this;
    }

    /**
     * @param float $quantity Quantity of items shipped. Default is 1. Can be changed with parameters.
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;
        $this->propertyFilled('quantity');
        return $this;
    }

    /**
     * @param string $country This is the country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        $this->propertyFilled('country');
        return $this;
    }
}
