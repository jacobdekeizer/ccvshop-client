<?php

namespace JacobDeKeizer\Ccv\QueryParameters;

use JacobDeKeizer\Ccv\Contracts\QueryParameter;

class QueryParameterExpand implements QueryParameter
{
    /**
     * @var string[]
     */
    private $expandedFields;

    public function __construct(array $expandedFields)
    {
        $this->expandedFields = $expandedFields;
    }

    public function toQueryString(): ?string
    {
        if (count($this->expandedFields) === 0) {
            return null;
        }

        return 'expand=' . implode(',', $this->expandedFields);
    }
}

