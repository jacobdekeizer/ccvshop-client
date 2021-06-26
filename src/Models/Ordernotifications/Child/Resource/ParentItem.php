<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Ordernotifications\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class ParentItem implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Collection of all order notification of this order.
     */
    private $href;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string Collection of all order notification of this order.
     */
    public function getHref(): string
    {
        return $this->href;
    }
    
    /**
     * @param string $href Collection of all order notification of this order.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
