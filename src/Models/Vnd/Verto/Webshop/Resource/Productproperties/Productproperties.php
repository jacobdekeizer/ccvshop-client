<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productproperties implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Product Property Group Id
     */
    private int $id;

    /**
     * @var int|null Product Property parent Id
     */
    private ?int $parent;

    /**
     * @var string Property name
     */
    private string $name;

    /**
     * @var string|null Property description
     */
    private ?string $description;

    /**
     * @var int|null Property position
     */
    private ?int $position;

    /**
     * @var string|null Base64 encoded Property icon
     */
    private ?string $icon;

    /**
     * @var string|null The property type
     */
    private ?string $type;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties\Child\Options|null Product property options
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties\Child\Options $options;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode[]|null Array with child properties, only filled when property is a group
     */
    private ?array $children;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Product Property Group Id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int|null Product Property parent Id
     */
    public function getParent(): ?int
    {
        return $this->parent;
    }

    /**
     * @return string Property name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null Property description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int|null Property position
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string|null Base64 encoded Property icon
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @return string|null The property type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties\Child\Options|null Product property options
     */
    public function getOptions(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties\Child\Options
    {
        return $this->options;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode[]|null Array with child properties, only filled when property is a group
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int $id Product Property Group Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int|null $parent Product Property parent Id
     * @return self
     */
    public function setParent(?int $parent): self
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @param string $name Property name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $description Property description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int|null $position Property position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param string|null $icon Base64 encoded Property icon
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param string|null $type The property type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties\Child\Options|null $options Product property options
     * @return self
     */
    public function setOptions(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productproperties\Child\Options $options): self
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode|null ...$children $children Array with child properties, only filled when property is a group
     * @return self
     */
    public function setChildren(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode ...$children): self
    {
        $this->children = $children;
        return $this;
    }
}
