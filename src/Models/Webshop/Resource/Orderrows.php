<?php

namespace JacobDeKeizer\Ccv\Models\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orderrows implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to products that are ordered with this order
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
     * @return string Link to products that are ordered with this order
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string Link to products that are ordered with this order
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
