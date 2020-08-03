<?php

namespace JacobDeKeizer\Ccv\QueryParameters;

use JacobDeKeizer\Ccv\Contracts\QueryParameter;

class QueryParameterOptional implements QueryParameter
{
    private $parameter;
    private $value;

    public function __construct(string $parameter, $value)
    {
        $this->parameter = $parameter;
        $this->value = $value;
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }

    public function getValue(): ?string
    {
        if ($this->value === null) {
            return null;
        }

        if (is_bool($this->value)) {
            return $this->value ? 'true' : 'false';
        }

        return (string) $this->value;
    }

    public function toQueryString(): ?string
    {
        if ($this->getValue() === null) {
            return null;
        }

        return $this->getParameter() . '=' . $this->getValue();
    }
}
