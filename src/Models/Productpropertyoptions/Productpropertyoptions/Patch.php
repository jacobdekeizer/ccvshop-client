<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Option name.
     */
    private $name;

    /**
     * @var int|null Position of the option in the list.
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
     * @return string Option name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int|null Position of the option in the list.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param string $name Option name.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param int|null $position Position of the option in the list.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}
