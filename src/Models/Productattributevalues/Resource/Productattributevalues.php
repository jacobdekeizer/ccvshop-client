<?php

namespace JacobDeKeizer\Ccv\Models\Productattributevalues\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productattributevalues implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int Product 2 attribute ID
     */
    private $id;

    /**
     * @var int Attribute Id
     */
    private $optionid;

    /**
     * @var string Attribute Name
     */
    private $optionname;

    /**
     * @var int Attribute Position
     */
    private $optionposition;

    /**
     * @var int Option value id
     */
    private $optionvalueId;

    /**
     * @var string Option value name
     */
    private $optionvalueName;

    /**
     * @var float Position starting from 1.
     */
    private $position;

    /**
     * @var float Extra price for this attribute
     */
    private $price;

    /**
     * @var bool Deprecated. Attribute option value enable. Value is always true.
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
     * @return string|null Link to self
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
     * @return int Attribute Id
     */
    public function getOptionid(): int
    {
        return $this->optionid;
    }

    /**
     * @return string Attribute Name
     */
    public function getOptionname(): string
    {
        return $this->optionname;
    }

    /**
     * @return int Attribute Position
     */
    public function getOptionposition(): int
    {
        return $this->optionposition;
    }

    /**
     * @return int Option value id
     */
    public function getOptionvalueId(): int
    {
        return $this->optionvalueId;
    }

    /**
     * @return string Option value name
     */
    public function getOptionvalueName(): string
    {
        return $this->optionvalueName;
    }

    /**
     * @return float Position starting from 1.
     */
    public function getPosition(): float
    {
        return $this->position;
    }

    /**
     * @return float Extra price for this attribute
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return bool Deprecated. Attribute option value enable. Value is always true.
     * @deprecated
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @param string|null $href Link to self
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
     * @param int $optionid Attribute Id
     * @return self
     */
    public function setOptionid(int $optionid): self
    {
        $this->optionid = $optionid;
        $this->propertyFilled('optionid');
        return $this;
    }

    /**
     * @param string $optionname Attribute Name
     * @return self
     */
    public function setOptionname(string $optionname): self
    {
        $this->optionname = $optionname;
        $this->propertyFilled('optionname');
        return $this;
    }

    /**
     * @param int $optionposition Attribute Position
     * @return self
     */
    public function setOptionposition(int $optionposition): self
    {
        $this->optionposition = $optionposition;
        $this->propertyFilled('optionposition');
        return $this;
    }

    /**
     * @param int $optionvalueId Option value id
     * @return self
     */
    public function setOptionvalueId(int $optionvalueId): self
    {
        $this->optionvalueId = $optionvalueId;
        $this->propertyFilled('optionvalueId');
        return $this;
    }

    /**
     * @param string $optionvalueName Option value name
     * @return self
     */
    public function setOptionvalueName(string $optionvalueName): self
    {
        $this->optionvalueName = $optionvalueName;
        $this->propertyFilled('optionvalueName');
        return $this;
    }

    /**
     * @param float $position Position starting from 1.
     * @return self
     */
    public function setPosition(float $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param float $price Extra price for this attribute
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
     * @deprecated
     */
    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;
        $this->propertyFilled('enable');
        return $this;
    }
}
