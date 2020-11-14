<?php

namespace JacobDeKeizer\Ccv\Models\Orders\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orderlabels implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to collection of order labels
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
     * @return string Link to collection of order labels
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to collection of order labels
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
