<?php

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributes implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to collection of attributes belonging to the combination
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
     * @return string|null Link to collection of attributes belonging to the combination
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param string|null $href Link to collection of attributes belonging to the combination
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
