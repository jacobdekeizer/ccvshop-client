<?php

namespace JacobDeKeizer\Ccv\QueryParameters;

use JacobDeKeizer\Ccv\Contracts\QueryParameter;

class QueryParameterBuilder implements QueryParameter
{
    /**
     * @var QueryParameter[]
     */
    private $parameters = [];

    /**
     * @param string|int|bool|null $value
     */
    public function addOptionalParameter(string $parameter, $value): QueryParameterBuilder
    {
        $this->parameters[] = new QueryParameterOptional($parameter, $value);
        return $this;
    }

    /**
     * @param string[] $fields
     */
    public function expandFields(array $fields): QueryParameterBuilder
    {
        $this->parameters[] = new QueryParameterExpand($fields);
        return $this;
    }

    public function toQueryString(): ?string
    {
        $queryString = '';

        foreach ($this->parameters as $parameter) {
            if (($paramQueryString = $parameter->toQueryString()) === null) {
                continue;
            }

            $queryString = $this->appendToQueryString($queryString, $paramQueryString);
        }

        return $queryString;
    }

    private function appendToQueryString(string $queryString, string $queryStringToAdd): string
    {
        if ($queryStringToAdd === '') {
            return $queryString;
        }

        if ($queryString === '') {
            return '?' . $queryStringToAdd;
        }

        return $queryString . '&' . $queryStringToAdd;
    }
}
