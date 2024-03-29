<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productattributevalues\Patch;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Patch implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Attribute option position
     */
    private ?int $optionposition;

    /**
     * @var int|null Attribute option value position
     */
    private ?int $position;

    /**
     * @var float|null Attribute option value price
     */
    private ?float $price;

    /**
     * @var bool|null Deprecated. Attribute option value enable. Value is always true.
     */
    private ?bool $enable;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @deprecated
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
        return $this;
    }

    /**
     * @param int|null $position Attribute option value position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param float|null $price Attribute option value price
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param bool|null $enable Deprecated. Attribute option value enable. Value is always true.
     * @return self
     * @deprecated
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }
}
