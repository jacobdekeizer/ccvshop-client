<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Contracts;

interface QueryParameter
{
    public function toQueryString(): ?string;
}
