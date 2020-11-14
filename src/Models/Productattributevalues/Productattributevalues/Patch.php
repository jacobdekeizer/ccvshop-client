<?php

namespace JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var int|null Attribute option position
     */
    private $optionposition;

    /**
     * @var int|null Attribute option value position
     */
    private $position;

    /**
     * @var float|null Attribute option value price
     */
    private $price;

    /**
     * @var bool|null Deprecated. Attribute option value enable. Value is always true.
     */
    private $enable;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Attribute option position
     */
    public function getOptionposition(): ?int
    {
        return $this->optionposition;
    }

    /**
     * @return int|null Attribute option value position
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return float|null Attribute option value price
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return bool|null Deprecated. Attribute option value enable. Value is always true.
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * @param int|null $optionposition Attribute option position
     * @return self
     */
    public function setOptionposition(?int $optionposition): self
    {
        $this->optionposition = $optionposition;
        $this->propertyFilled('optionposition');
        return $this;
    }

    /**
     * @param int|null $position Attribute option value position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param float|null $price Attribute option value price
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param bool|null $enable Deprecated. Attribute option value enable. Value is always true.
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        $this->propertyFilled('enable');
        return $this;
    }
}
