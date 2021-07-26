<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Name of the option (attribute)
     */
    private $optionName;

    /**
     * @var string Name of the attribute value
     */
    private $valueName;

    /**
     * @var float|null Additional price of this attribute value
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
     * @return string Name of the option (attribute)
     */
    public function getOptionName(): string
    {
        return $this->optionName;
    }

    /**
     * @return string Name of the attribute value
     */
    public function getValueName(): string
    {
        return $this->valueName;
    }

    /**
     * @return float|null Additional price of this attribute value
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param string $optionName Name of the option (attribute)
     * @return self
     */
    public function setOptionName(string $optionName): self
    {
        $this->optionName = $optionName;
        $this->propertyFilled('optionName');
        return $this;
    }

    /**
     * @param string $valueName Name of the attribute value
     * @return self
     */
    public function setValueName(string $valueName): self
    {
        $this->valueName = $valueName;
        $this->propertyFilled('valueName');
        return $this;
    }

    /**
     * @param float|null $price Additional price of this attribute value
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
}
