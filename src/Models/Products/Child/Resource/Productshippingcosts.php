<?php

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productshippingcosts implements Model
{
    use FromArray, ToArray;

    /**
     * @var float Indication of shipping costs if only one item would be baught and shipped to the default country.
     */
    private $costs;

    /**
     * @var string|null This is the default country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     */
    private $defaultCountry;

    /**
     * @var float Quantity of items shipped. Default is 1. Can be changed with parameters.
     */
    private $quantity;

    /**
     * @var string Link to collection of product shipping costs.
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts[] Array with collection items
     */
    private $collection;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
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
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts[] Array with collection items
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
        $this->propertyFilled('costs');
        return $this;
    }

    /**
     * @param string|null $defaultCountry This is the default country products are shipped to. Country Alpha-2 code. See ISO 3166-1 and ISO 3166-2.
     * @return self
     */
    public function setDefaultCountry(?string $defaultCountry): self
    {
        $this->defaultCountry = $defaultCountry;
        $this->propertyFilled('defaultCountry');
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
     * @param string $href Link to collection of product shipping costs.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts[] $collection Array with collection items
     * @return self
     */
    public function setCollection(array $collection): self
    {
        $this->collection = $collection;
        $this->propertyFilled('collection');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'collection') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
