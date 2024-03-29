<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Servicecategories implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var int|null Unique id of the resource
     */
    private ?int $id;

    /**
     * @var string|null Service category name
     */
    private ?string $name;

    /**
     * @var string|null Service category description
     */
    private ?string $description;

    /**
     * @var int|null Position of the category
     */
    private ?int $position;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Child\Services|null Services linked to this attribute.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Child\Services $services;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return string|null Service category name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null Service category description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int|null Position of the category
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Child\Services|null Services linked to this attribute.
     */
    public function getServices(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Child\Services
    {
        return $this->services;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $name Service category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $description Service category description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int|null $position Position of the category
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Child\Services|null $services Services linked to this attribute.
     * @return self
     */
    public function setServices(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Child\Services $services): self
    {
        $this->services = $services;
        return $this;
    }
}
