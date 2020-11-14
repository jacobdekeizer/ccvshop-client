<?php

namespace JacobDeKeizer\Ccv\Models\Attributes\Attributes;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Attribute name
     */
    private $name;

    /**
     * @var string Attribute type. Option menu is a dropdown menu where items can be selected. Text is an inputfield. Additional menus are like option menus, but no attribute combinations will be created. Note, you can only change between the required and non-required version.
     */
    private $type;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Attribute name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string Attribute type. Option menu is a dropdown menu where items can be selected. Text is an inputfield. Additional menus are like option menus, but no attribute combinations will be created. Note, you can only change between the required and non-required version.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $name Attribute name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $type Attribute type. Option menu is a dropdown menu where items can be selected. Text is an inputfield. Additional menus are like option menus, but no attribute combinations will be created. Note, you can only change between the required and non-required version.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }
}
