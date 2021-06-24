<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    private $value;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
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
        $this->propertyFilled('value');
        return $this;
    }
}
