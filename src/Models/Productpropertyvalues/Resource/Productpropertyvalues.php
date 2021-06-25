<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productpropertyvalues implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var int Property value Id
     */
    private $id;
    
    /**
     * @var int Product Id
     */
    private $productId;
    
    /**
     * @var int Property Id
     */
    private $productPropertyId;
    
    /**
     * @var string Value of Product property value
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
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }
    
    /**
     * @return int Property value Id
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return int Product Id
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    
    /**
     * @return int Property Id
     */
    public function getProductPropertyId(): int
    {
        return $this->productPropertyId;
    }
    
    /**
     * @return string Value of Product property value
     */
    public function getValue(): string
    {
        return $this->value;
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
     * @param int $id Property value Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param int $productId Product Id
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }
    
    /**
     * @param int $productPropertyId Property Id
     * @return self
     */
    public function setProductPropertyId(int $productPropertyId): self
    {
        $this->productPropertyId = $productPropertyId;
        $this->propertyFilled('productPropertyId');
        return $this;
    }
    
    /**
     * @param string $value Value of Product property value
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }
}
