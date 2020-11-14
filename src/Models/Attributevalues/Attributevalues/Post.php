<?php

namespace JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Attribute value name
     */
    private $name;

    /**
     * @var float Default price of this attribute value
     */
    private $defaultPrice;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Attribute value name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float Default price of this attribute value
     */
    public function getDefaultPrice(): float
    {
        return $this->defaultPrice;
    }

    /**
     * @param string $name Attribute value name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param float $defaultPrice Default price of this attribute value
     * @return self
     */
    public function setDefaultPrice(float $defaultPrice): self
    {
        $this->defaultPrice = $defaultPrice;
        $this->propertyFilled('defaultPrice');
        return $this;
    }
}
