<?php

namespace JacobDeKeizer\Ccv\Parameters\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray, SortableFields;

    /**
     * @return All
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->orderBy($this->getOrderBy());
    }

    public function orderByIdAsc(): All
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): All
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByIsMainPhotoAsc(): All
    {
        $this->orderByField('ismainphoto', true);
        return $this;
    }

    public function orderByIsMainPhotoDesc(): All
    {
        $this->orderByField('ismainphoto', false);
        return $this;
    }
}
