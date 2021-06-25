<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Brand implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to brand resource
     */
    private $href;
    
    /**
     * @var int|null Brand Id
     */
    private $id;
    
    /**
     * @var string|null Brand name
     */
    private $name;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Link to brand resource
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return int|null Brand Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return string|null Brand name
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @param string|null $href Link to brand resource
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int|null $id Brand Id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string|null $name Brand name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
