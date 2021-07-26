<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Colors\Colors;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Color name
     */
    private $name;

    /**
     * @var string Hex color code (#000000). Must be unique.
     */
    private $hex;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Color name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string Hex color code (#000000). Must be unique.
     */
    public function getHex(): string
    {
        return $this->hex;
    }

    /**
     * @param string $name Color name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $hex Hex color code (#000000). Must be unique.
     * @return self
     */
    public function setHex(string $hex): self
    {
        $this->hex = $hex;
        $this->propertyFilled('hex');
        return $this;
    }
}
