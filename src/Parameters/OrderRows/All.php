<?php

namespace JacobDeKeizer\Ccv\Parameters\OrderRows;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray;

    /**
     * @return All
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }
}

