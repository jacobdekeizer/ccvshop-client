<?php

namespace JacobDeKeizer\Ccv\Models\Orders;

class TakeOutWindow
{
    private $start;
    private $end;

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