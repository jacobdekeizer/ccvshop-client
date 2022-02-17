<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Services implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var int|null Unique id of the resource.
     */
    private ?int $id;

    /**
     * @var string|null Service Name.
     */
    private ?string $name;

    /**
     * @var string|null App Name
     */
    private ?string $modifiedDate;

    /**
     * @var string|null The description of the service.
     */
    private ?string $description;

    /**
     * @var string|null Cover image.
     */
    private ?string $cover;

    /**
     * @var int|null The position of the service.
     */
    private ?int $position;

    /**
     * @var string[]|null Array with available screenshots.
     */
    private ?array $screenshots;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Company|null The company whom provide the service.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Company $company;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Categories|null Collection of categories.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Categories $categories;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\ParentItem|null Contains link to parent resource.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\ParentItem $parent;

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
     * @return int|null Unique id of the resource.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Service Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null App Name
     */
    public function getModifiedDate(): ?string
    {
        return $this->modifiedDate;
    }

    /**
     * @return string|null The description of the service.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null Cover image.
     */
    public function getCover(): ?string
    {
        return $this->cover;
    }

    /**
     * @return int|null The position of the service.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string[]|null Array with available screenshots.
     */
    public function getScreenshots(): ?array
    {
        return $this->screenshots;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Company|null The company whom provide the service.
     */
    public function getCompany(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Company
    {
        return $this->company;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Categories|null Collection of categories.
     */
    public function getCategories(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Categories
    {
        return $this->categories;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\ParentItem
    {
        return $this->parent;
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
     * @param int|null $id Unique id of the resource.
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $name Service Name.
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $modifiedDate App Name
     * @return self
     */
    public function setModifiedDate(?string $modifiedDate): self
    {
        $this->modifiedDate = $modifiedDate;
        return $this;
    }

    /**
     * @param string|null $description The description of the service.
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string|null $cover Cover image.
     * @return self
     */
    public function setCover(?string $cover): self
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @param int|null $position The position of the service.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param string[]|null $screenshots Array with available screenshots.
     * @return self
     */
    public function setScreenshots(?array $screenshots): self
    {
        $this->screenshots = $screenshots;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Company|null $company The company whom provide the service.
     * @return self
     */
    public function setCompany(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Company $company): self
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Categories|null $categories Collection of categories.
     * @return self
     */
    public function setCategories(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\Categories $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}