<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Contracts;

interface Model
{
    public static function fromArray(array $data): Model;

    public function toArray(bool $onlyFilledProperties = true): array;
}
