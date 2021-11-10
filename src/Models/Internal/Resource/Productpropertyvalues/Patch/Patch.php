<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productpropertyvalues\Patch;

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
     * @var string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    private string $value;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value The value, an boolean when checkbox, an optionid when property type is option, string when else
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
