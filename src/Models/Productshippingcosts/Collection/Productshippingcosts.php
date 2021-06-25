<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productshippingcosts\Collection;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productshippingcosts implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Productshippingcosts\Resource\Productshippingcosts[] Array with collection items
     */
    private $items;
    
    /**
     * @var float|null Optional value of the parameter.
     */
    private $quantity;
    
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
     * @return \JacobDeKeizer\Ccv\Models\Productshippingcosts\Resource\Productshippingcosts[] Array with collection items
     */
    public function getItems(): array
    {
        return $this->items;
    }
    
    /**
     * @return float|null Optional value of the parameter.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
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
     * @param \JacobDeKeizer\Ccv\Models\Productshippingcosts\Resource\Productshippingcosts[] $items Array with collection items
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        $this->propertyFilled('items');
        return $this;
    }
    
    /**
     * @param float|null $quantity Optional value of the parameter.
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;
        $this->propertyFilled('quantity');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'items') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Productshippingcosts\Resource\Productshippingcosts::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
