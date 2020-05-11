<?php

namespace JacobDeKeizer\Ccv\Traits;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Support\Str;

trait ToArray
{
    public function toArray(bool $includeNullValues = true): array
    {
        $data = [];

        $properties = get_object_vars($this);

        foreach ($properties as $key => $value) {
            $snakeKey = Str::snake($key);

            if ($this->removeFromRequestData($snakeKey)) {
                continue;
            }

            $value = $this->covertToData($snakeKey, $value);

            if ($value instanceof Model) {
                $value = $value->toArray();
            }

            if ($value === null && !$includeNullValues) {
                continue;
            }

            $data[$snakeKey] = $value;
        }

        return $data;
    }

    protected function removeFromRequestData(string $key): bool
    {
        return false;
    }

    protected function covertToData(string $key, $value)
    {
        return $value;
    }
}
