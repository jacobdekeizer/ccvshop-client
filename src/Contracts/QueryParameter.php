<?php

namespace JacobDeKeizer\Ccv\Contracts;

interface QueryParameter
{
    public function toQueryString(): ?string;
}
