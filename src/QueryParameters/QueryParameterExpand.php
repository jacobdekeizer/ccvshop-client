<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\QueryParameters;

use JacobDeKeizer\Ccv\Contracts\QueryParameter;

class QueryParameterExpand implements QueryParameter
{
    /**
     * @var string[]
     */
    private array $expandedFields;

    /**
     * @param string[] $expandedFields
     */
    public function __construct(array $expandedFields)
    {
        $this->expandedFields = $expandedFields;
    }

    public function toQueryString(): ?string
    {
        if (count($this->expandedFields) === 0) {
            return null;
        }

        return 'expand=' . urlencode(implode(',', $this->expandedFields));
    }
}
