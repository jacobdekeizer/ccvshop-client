<?php

namespace JacobDeKeizer\Ccv\Contracts;

use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;

interface Parameter
{
    /**
     * @return Parameter
     */
    public static function fromArray(array $data);

    public function toBuilder(): QueryParameterBuilder;
}
