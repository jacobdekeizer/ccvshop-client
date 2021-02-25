<?php

namespace JacobDeKeizer\Ccv\Parameters\Apps;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Parameters\Apps\Concerns\ExpandableAppFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class Get implements Parameter
{
    use FromArray, ExpandableAppFields;

    /**
     * @param array $data
     * @return Get
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->expandFields($this->getExpandedFields());
    }
}
