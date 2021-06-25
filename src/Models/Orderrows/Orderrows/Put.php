<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderrows\Orderrows;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Orderrows\Orderrow\Input[] Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    private $orderrows;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Orderrows\Orderrow\Input[] Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    public function getOrderrows(): array
    {
        return $this->orderrows;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Orderrows\Orderrow\Input[] $orderrows Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     * @return self
     */
    public function setOrderrows(array $orderrows): self
    {
        $this->orderrows = $orderrows;
        $this->propertyFilled('orderrows');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'orderrows') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Orderrows\Orderrow\Input::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
