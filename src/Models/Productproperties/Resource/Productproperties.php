<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productproperties\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productproperties implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var int Product Property Group Id
     */
    private $id;
    
    /**
     * @var int|null Product Property parent Id
     */
    private $parent;
    
    /**
     * @var string Property name
     */
    private $name;
    
    /**
     * @var string|null Property description
     */
    private $description;
    
    /**
     * @var int|null Property position
     */
    private $position;
    
    /**
     * @var string|null Base64 encoded Property icon
     */
    private $icon;
    
    /**
     * @var string|null The property type
     */
    private $type;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Productproperties\Child\Resource\Options|null Product property options
     */
    private $options;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Categorytreenode[]|null Array with child properties, only filled when property is a group
     */
    private $children;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
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
     * @return \JacobDeKeizer\Ccv\Models\Productproperties\Child\Resource\Options|null Product property options
     */
    public function getOptions(): ?\JacobDeKeizer\Ccv\Models\Productproperties\Child\Resource\Options
    {
        return $this->options;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Categorytreenode[]|null Array with child properties, only filled when property is a group
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
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int $id Product Property Group Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param int|null $parent Product Property parent Id
     * @return self
     */
    public function setParent(?int $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
    
    /**
     * @param string $name Property name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param string|null $description Property description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }
    
    /**
     * @param int|null $position Property position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
    
    /**
     * @param string|null $icon Base64 encoded Property icon
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        $this->propertyFilled('icon');
        return $this;
    }
    
    /**
     * @param string|null $type The property type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Productproperties\Child\Resource\Options|null $options Product property options
     * @return self
     */
    public function setOptions(?\JacobDeKeizer\Ccv\Models\Productproperties\Child\Resource\Options $options): self
    {
        $this->options = $options;
        $this->propertyFilled('options');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Categorytreenode[]|null $children Array with child properties, only filled when property is a group
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        $this->propertyFilled('children');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'children') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Categorytreenode::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
