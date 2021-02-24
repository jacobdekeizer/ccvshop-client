<?php

namespace JacobDeKeizer\Ccv\Models\Categories\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Categories implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to subcategory collection
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
     * @return string Link to subcategory collection
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to subcategory collection
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
