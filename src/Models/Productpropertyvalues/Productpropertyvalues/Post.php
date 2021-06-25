<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Unique product id
     */
    private $productId;
    
    /**
     * @var int Unique id of the product property group
     */
    private $productPropertyId;
    
    /**
     * @var string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    private $value;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return int Unique product id
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    
    /**
     * @return int Unique id of the product property group
     */
    public function getProductPropertyId(): int
    {
        return $this->productPropertyId;
    }
    
    /**
     * @return string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    public function getValue(): string
    {
        return $this->value;
    }
    
    /**
     * @param int $productId Unique product id
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }
    
    /**
     * @param int $productPropertyId Unique id of the product property group
     * @return self
     */
    public function setProductPropertyId(int $productPropertyId): self
    {
        $this->productPropertyId = $productPropertyId;
        $this->propertyFilled('productPropertyId');
        return $this;
    }
    
    /**
     * @param string $value The value, an boolean when checkbox, an optionid when property type is option, string when else
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }
}
