<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;

class TakeOutWindow implements Model
{
    use FromArray;

    private $start;
    private $end;

    public static function fromArray(array $data): TakeOutWindow
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return self::createFromArray($data);
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function getEnd(): ?string
    {
        return $this->end;
    }

    public function setStart(?string $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function setEnd(?string $end): self
    {
        $this->end = $end;
        return $this;
    }
}
