<?php

namespace JacobDeKeizer\Ccv\Models\Attributes\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class AttributeValues implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to the values of this attribute
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
     * @return string Link to the values of this attribute
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string Link to the values of this attribute
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
