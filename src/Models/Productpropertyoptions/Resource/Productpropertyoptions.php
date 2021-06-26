<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productpropertyoptions implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var int Product Property option Id
     */
    private $id;
    
    /**
     * @var string Option name.
     */
    private $name;
    
    /**
     * @var int|null Position of the option in the list.
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
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }
    
    /**
     * @return int Product Property option Id
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return string Option name.
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @return int|null Position of the option in the list.
     */
    public function getPosition(): ?int
    {
        return $this->position;
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
     * @param int $id Product Property option Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string $name Option name.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param int|null $position Position of the option in the list.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}
