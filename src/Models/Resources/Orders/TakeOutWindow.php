<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class TakeOutWindow implements Model
{
    use FromArray, ToArray;

    private $start;
    private $end;

    /**
     * @return TakeOutWindow
     */
    public static function fromArray(array $data): Model
    {
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
