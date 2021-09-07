<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Contracts;

use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;

interface Parameter
{
    public static function fromArray(array $data): Parameter;

    public function toBuilder(): QueryParameterBuilder;
}
