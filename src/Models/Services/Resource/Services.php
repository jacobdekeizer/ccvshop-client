<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Services\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Services implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var int|null Unique id of the resource.
     */
    private $id;
    
    /**
     * @var string|null Service Name.
     */
    private $name;
    
    /**
     * @var string|null App Name
     */
    private $modifiedDate;
    
    /**
     * @var string|null The description of the service.
     */
    private $description;
    
    /**
     * @var string|null Cover image.
     */
    private $cover;
    
    /**
     * @var int|null The position of the service.
     */
    private $position;
    
    /**
     * @var string[]|null Array with available screenshots.
     */
    private $screenshots;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Company|null The company whom provide the service.
     */
    private $company;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Categories|null Collection of categories.
     */
    private $categories;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Services\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    private $parent;
    
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
     * @return \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Company|null The company whom provide the service.
     */
    public function getCompany(): ?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\Company
    {
        return $this->company;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Categories|null Collection of categories.
     */
    public function getCategories(): ?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\Categories
    {
        return $this->categories;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Services\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\ParentItem
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
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int|null $id Unique id of the resource.
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string|null $name Service Name.
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param string|null $modifiedDate App Name
     * @return self
     */
    public function setModifiedDate(?string $modifiedDate): self
    {
        $this->modifiedDate = $modifiedDate;
        $this->propertyFilled('modifiedDate');
        return $this;
    }
    
    /**
     * @param string|null $description The description of the service.
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }
    
    /**
     * @param string|null $cover Cover image.
     * @return self
     */
    public function setCover(?string $cover): self
    {
        $this->cover = $cover;
        $this->propertyFilled('cover');
        return $this;
    }
    
    /**
     * @param int|null $position The position of the service.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
    
    /**
     * @param string[]|null $screenshots Array with available screenshots.
     * @return self
     */
    public function setScreenshots(?array $screenshots): self
    {
        $this->screenshots = $screenshots;
        $this->propertyFilled('screenshots');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Company|null $company The company whom provide the service.
     * @return self
     */
    public function setCompany(?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\Company $company): self
    {
        $this->company = $company;
        $this->propertyFilled('company');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Services\Child\Resource\Categories|null $categories Collection of categories.
     * @return self
     */
    public function setCategories(?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\Categories $categories): self
    {
        $this->categories = $categories;
        $this->propertyFilled('categories');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Services\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Services\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
