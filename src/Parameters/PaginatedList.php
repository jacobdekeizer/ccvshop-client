<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;

abstract class PaginatedList implements Parameter
{
    protected ?int $start = null;

    protected ?int $size = null;

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

    public function setStart(?int $start): static
    {
        $this->start = $start;
        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): static
    {
        $this->size = $size;
        return $this;
    }
}
