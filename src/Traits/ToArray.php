<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Traits;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Support\Str;

trait ToArray
{
    /**
     * @var string[]
     */
    private $filledProperties;
    private $ignoredProperties = [
        'filledProperties',
        'onlyFilledProperties',
        'ignoredProperties',
    ];

    public function toArray(bool $onlyFilledProperties = true): array
    {
        $data = [];

        $properties = get_object_vars($this);

        foreach ($properties as $key => $value) {
            if (in_array($key, $this->ignoredProperties)) {
                continue;
            }

            $snakeKey = Str::snake($key);

            if ($this->removeFromToArrayData($snakeKey)) {
                continue;
            }

            if ($onlyFilledProperties && !in_array($snakeKey, $this->filledProperties)) {
                continue;
            }

            $value = $this->convertToArrayData($snakeKey, $value);

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

    final protected function propertyFilled(string $key): void
    {
        $this->filledProperties[] = Str::snake($key);
    }

    protected function removeFromToArrayData(string $key): bool
    {
        return false;
    }

    protected function convertToArrayData(string $key, $value)
    {
        return $value;
    }
}
