<?php

namespace JacobDeKeizer\Ccv\Parameters\Webhooks;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList
{
    use FromArray;

    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }
}
