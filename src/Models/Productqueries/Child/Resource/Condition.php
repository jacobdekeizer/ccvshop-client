<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Condition implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to condition resource
     */
    private $href;
    
    /**
     * @var int|null Condition Id
     */
    private $id;
    
    /**
     * @var string|null Condition name
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
     * @return string|null Link to condition resource
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return int|null Condition Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return string|null Condition name
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @param string|null $href Link to condition resource
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int|null $id Condition Id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string|null $name Condition name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
