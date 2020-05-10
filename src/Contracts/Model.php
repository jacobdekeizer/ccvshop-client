<?php

namespace JacobDeKeizer\Ccv\Contracts;

interface Model
{
    public static function fromArray(array $data): Model;

    public function toArray(bool $includeNullValues = true): array;
}
