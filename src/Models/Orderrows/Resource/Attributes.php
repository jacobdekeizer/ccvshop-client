<?php

namespace JacobDeKeizer\Ccv\Models\Orderrows\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributes implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Option name
     */
     private $optionName;

    /**
     * @var string Value name
     */
     private $valueName;

    /**
     * @var float Extra price added to the order row.
     */
     private $price;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Option name
     */
    public function getOptionName(): string
    {
        return $this->optionName;
    }

    /**
     * @return string Value name
     */
    public function getValueName(): string
    {
        return $this->valueName;
    }

    /**
     * @return float Extra price added to the order row.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param string Option name
     * @return self
     */
    public function setOptionName(string $optionName): self
    {
        $this->optionName = $optionName;
        $this->propertyFilled('optionName');
        return $this;
    }

    /**
     * @param string Value name
     * @return self
     */
    public function setValueName(string $valueName): self
    {
        $this->valueName = $valueName;
        $this->propertyFilled('valueName');
        return $this;
    }

    /**
     * @param float Extra price added to the order row.
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
}
