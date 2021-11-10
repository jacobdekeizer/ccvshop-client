<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Traits;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Support\Str;

trait ToArray
{
    public function toArray(bool $onlyFilledProperties = true): array
    {
        $data = [];

        $reflectionClass = new \ReflectionClass($this);

        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);

            $isInitialized = $property->isInitialized($this);

            if ($onlyFilledProperties && !$isInitialized) {
                continue;
            }

            $value = $isInitialized ? $property->getValue($this) : $property->getDefaultValue();

            $snakeKey = Str::snake($property->name);

            if (is_array($value)) {
                $value = array_map(static function ($val) use ($onlyFilledProperties) {
                    if ($val instanceof Model) {
                        return $val->toArray($onlyFilledProperties);
                    }

                    return $val;
                }, $value);
            } elseif ($value instanceof Model) {
                $value = $value->toArray($onlyFilledProperties);
            }

            $data[$snakeKey] = $value;
        }

        return $data;
    }
}
