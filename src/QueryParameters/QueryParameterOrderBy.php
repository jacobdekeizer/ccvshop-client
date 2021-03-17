<?php

namespace JacobDeKeizer\Ccv\QueryParameters;

use JacobDeKeizer\Ccv\Contracts\QueryParameter;

class QueryParameterOrderBy implements QueryParameter
{
    private $orderBy;

    public function __construct(?string $orderBy)
    {
        $this->orderBy = $orderBy;
    }

    public function toQueryString(): ?string
    {
        if ($this->orderBy === null) {
            return null;
        }

        return 'orderby=' . urlencode($this->orderBy);
    }
}
