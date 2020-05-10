<?php

namespace JacobDeKeizer\Ccv\Models;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Href implements Model
{
    use FromArray, ToArray;

    private $href;

    /**
     * @return Href
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
