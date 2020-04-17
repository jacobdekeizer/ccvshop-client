<?php

namespace JacobDeKeizer\Ccv\Models\Orders;

class Href
{
    private $href;

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