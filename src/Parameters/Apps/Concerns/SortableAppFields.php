<?php

namespace JacobDeKeizer\Ccv\Parameters\Apps\Concerns;

use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;

trait SortableAppFields
{
    use SortableFields;

    public function orderByIdAsc(): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByNameAsc(): self
    {
        $this->orderByField('name', true);
        return $this;
    }

    public function orderByNameDesc(): self
    {
        $this->orderByField('name', false);
        return $this;
    }

    public function orderByPopulairAsc(): self
    {
        $this->orderByField('populair', true);
        return $this;
    }

    public function orderByPopulairDesc(): self
    {
        $this->orderByField('populair', false);
        return $this;
    }

    public function orderByDateAsc(): self
    {
        $this->orderByField('date', true);
        return $this;
    }

    public function orderByDateDesc(): self
    {
        $this->orderByField('date', false);
        return $this;
    }
}
