<?php

namespace JacobDeKeizer\Ccv\Parameters;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;

abstract class PaginatedList implements Parameter
{
    /** @var int|null */
    protected $start;

    /** @var int|null */
    protected $size;

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->addOptionalParameter('start', $this->getStart())
            ->addOptionalParameter('size', $this->getSize());
    }

    public function getStart(): ?int
    {
        return $this->start;
    }

    public function setStart(?int $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }
}
