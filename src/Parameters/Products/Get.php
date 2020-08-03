<?php

namespace JacobDeKeizer\Ccv\Parameters\Products;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Parameters\Products\Concerns\ExpandableProductFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class Get implements Parameter
{
    use FromArray, ExpandableProductFields;

    /**
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
