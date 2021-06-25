<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Attribute value name
     */
    private $name;
    
    /**
     * @var float|null Default price of this attribute value
     */
    private $defaultPrice;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Attribute value name
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @return float|null Default price of this attribute value
     */
    public function getDefaultPrice(): ?float
    {
        return $this->defaultPrice;
    }
    
    /**
     * @param string|null $name Attribute value name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param float|null $defaultPrice Default price of this attribute value
     * @return self
     */
    public function setDefaultPrice(?float $defaultPrice): self
    {
        $this->defaultPrice = $defaultPrice;
        $this->propertyFilled('defaultPrice');
        return $this;
    }
}
