<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productpropertyoptions\Patch;

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
     * @var string Option name.
     */
    private string $name;

    /**
     * @var int|null Position of the option in the list.
     */
    private ?int $position;

    public static function fromArray(array $data): static
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
        return $this;
    }

    /**
     * @param int|null $position Position of the option in the list.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
