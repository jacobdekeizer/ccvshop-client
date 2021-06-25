<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productpropertygroups implements Model
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
     * @var string Group name
     */
    private $name;
    
    /**
     * @var string|null Link to productproperties
     */
    private $productproperties;
    
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
     * @return string Group name
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @return string|null Link to productproperties
     */
    public function getProductproperties(): ?string
    {
        return $this->productproperties;
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
     * @param string $name Group name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param string|null $productproperties Link to productproperties
     * @return self
     */
    public function setProductproperties(?string $productproperties): self
    {
        $this->productproperties = $productproperties;
        $this->propertyFilled('productproperties');
        return $this;
    }
}
