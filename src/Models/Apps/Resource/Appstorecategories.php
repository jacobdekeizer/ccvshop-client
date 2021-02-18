<?php

namespace JacobDeKeizer\Ccv\Models\Apps\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Appstorecategories implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string|null App store category name
     */
    private $name;

    /**
     * @var string|null App store category description
     */
    private $description;

    /**
     * @var int|null Position of the category
     */
    private $position;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Apps|null Apps linked to this attribute.
     */
    private $apps;

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
     * @return string|null App store category name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null App store category description
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
     * @return \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Apps|null Apps linked to this attribute.
     */
    public function getApps(): ?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Apps
    {
        return $this->apps;
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
     * @param string|null $name App store category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $description App store category description
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
     * @param \JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Apps|null $apps Apps linked to this attribute.
     * @return self
     */
    public function setApps(?\JacobDeKeizer\Ccv\Models\Apps\Child\Resource\Apps $apps): self
    {
        $this->apps = $apps;
        $this->propertyFilled('apps');
        return $this;
    }
}
