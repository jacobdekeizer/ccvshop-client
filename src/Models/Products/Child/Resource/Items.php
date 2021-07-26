<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Items implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to attribute values
     */
    private $href;

    /**
     * @var int Product 2 attribute ID
     */
    private $id;

    /**
     * @var string Option value name
     */
    private $optionsname;

    /**
     * @var float Extra price of this attribute value
     */
    private $price;

    /**
     * @var bool Deprecated. Attribute option value enable. Value is always true.
     */
    private $enable;

    /**
     * @var int Position starting from 1
     */
    private $position;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Link to attribute values
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int Product 2 attribute ID
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Option value name
     */
    public function getOptionsname(): string
    {
        return $this->optionsname;
    }

    /**
     * @return float Extra price of this attribute value
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return bool Deprecated. Attribute option value enable. Value is always true.
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @return int Position starting from 1
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param string|null $href Link to attribute values
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Product 2 attribute ID
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $optionsname Option value name
     * @return self
     */
    public function setOptionsname(string $optionsname): self
    {
        $this->optionsname = $optionsname;
        $this->propertyFilled('optionsname');
        return $this;
    }

    /**
     * @param float $price Extra price of this attribute value
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param bool $enable Deprecated. Attribute option value enable. Value is always true.
     * @return self
     */
    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;
        $this->propertyFilled('enable');
        return $this;
    }

    /**
     * @param int $position Position starting from 1
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}
