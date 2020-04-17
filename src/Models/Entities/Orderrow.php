<?php

namespace JacobDeKeizer\Ccv\Models\Entities;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;

class Orderrow implements Model
{
    use FromArray;

    private $href;

    public static function fromArray(array $data): Orderrow
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
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
