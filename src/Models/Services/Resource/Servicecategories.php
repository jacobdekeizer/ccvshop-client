<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Services\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Servicecategories implements Model
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
     * @var string|null Service category name
     */
    private $name;

    /**
     * @var string|null Service category description
     */
    private $description;

    /**
     * @var int|null Position of the category
     */
    private $position;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Services|null Services linked to this attribute.
     */
    private $services;

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
     * @return \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Services|null Services linked to this attribute.
     */
    public function getServices(): ?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\Services
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
     * @param string|null $name Service category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $description Service category description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param int|null $position Position of the category
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Services|null $services Services linked to this attribute.
     * @return self
     */
    public function setServices(?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\Services $services): self
    {
        $this->services = $services;
        $this->propertyFilled('services');
        return $this;
    }
}
