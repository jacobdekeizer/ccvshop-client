<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Colors\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Colors implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string|null Color Name
     */
    private $name;

    /**
     * @var string The type of color. A 'color' will have a hex color code. Exceptions are transparent and multicolor.
     */
    private $type;

    /**
     * @var string|null Hex color code. Exceptions are transparent and multicolor. Then this is null.
     */
    private $hex;

    /**
     * @var int|null Position of color, used to sort.
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
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Color Name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string The type of color. A 'color' will have a hex color code. Exceptions are transparent and multicolor.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null Hex color code. Exceptions are transparent and multicolor. Then this is null.
     */
    public function getHex(): ?string
    {
        return $this->hex;
    }

    /**
     * @return int|null Position of color, used to sort.
     */
    public function getPosition(): ?int
    {
        return $this->position;
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
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $name Color Name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $type The type of color. A 'color' will have a hex color code. Exceptions are transparent and multicolor.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string|null $hex Hex color code. Exceptions are transparent and multicolor. Then this is null.
     * @return self
     */
    public function setHex(?string $hex): self
    {
        $this->hex = $hex;
        $this->propertyFilled('hex');
        return $this;
    }

    /**
     * @param int|null $position Position of color, used to sort.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}
