<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Traits;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Support\Str;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionParameter;
use ReflectionType;

trait FromArray
{
    protected static function createFromArray(array $data): static
    {
        $instance = new static();

        $instanceProperties = array_keys(get_class_vars(static::class));

        $missingKeys = array_diff($instanceProperties, array_keys($data));

        $missingData = array_fill_keys($missingKeys, null);

        $data = $missingData + $data;

        foreach ($data as $key => $value) {
            $setMethod = 'set' . Str::studly($key);

            if (!method_exists($instance, $setMethod)) {
                continue;
            }

            try {
                $reflectionMethod = new ReflectionMethod($instance, $setMethod);

                $reflectionParameter = $reflectionMethod->getParameters()[0] ?? null;
                $reflectionClass = $reflectionParameter?->getType()?->isBuiltin() === false
                    ? new ReflectionClass($reflectionParameter->getType()->getName())
                    : null;

                $isNullable = $reflectionParameter?->allowsNull();
                $isModel = $reflectionClass?->implementsInterface(Model::class) === true;
                $isVariadic = $reflectionParameter?->isVariadic() === true;

                if ($isModel && $isVariadic) {
                    $value = array_map(
                        fn (mixed $val): mixed => self::makeModel($reflectionClass, (array) $val ?? [], $isNullable),
                        $value ?? []
                    );
                } elseif ($isModel) {
                    $value = self::makeModel($reflectionClass, (array) $value ?? [], $isNullable);
                } else {
                    $value = $reflectionParameter !== null ? self::convertToType($reflectionParameter, $value) : $value;

                    $value = $instance->convertFromArrayData($key, $value);
                }
            } catch (ReflectionException) {
                continue;
            }

            $isVariadic ? $instance->$setMethod(...$value) : $instance->$setMethod($value);
        }

        return $instance;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        return $value;
    }

    private static function convertToType(ReflectionParameter $reflectionParameter, $value)
    {
        $type = $reflectionParameter->getType();
        $name = $type?->getName();

        if ($type === null || $name === null) {
            return $value;
        }

        return match ($name) {
            'array' => self::convertValueFromType($type, $value, static fn($value): array => (array) $value),
            'bool' => self::convertValueFromType($type, $value, static fn($value): bool => (bool) $value),
            'string' => self::convertValueFromType($type, $value, static fn($value): string => (string) $value),
            'int' => self::convertValueFromType($type, $value, static fn($value): int => (int) $value),
            'float' => self::convertValueFromType($type, $value, static fn($value): float => (float) $value),
            default => $value,
        };
    }

    private static function convertValueFromType(ReflectionType $type, $value, \Closure $convert)
    {
        if ($type->allowsNull()) {
            return $value !== null ? $convert($value) : null;
        }

        return $convert($value);
    }

    /**
     * @throws ReflectionException
     */
    private static function makeModel(ReflectionClass $reflectionClass, array $value, bool $isNullable): mixed
    {
        if ($isNullable && empty($value)) {
            return null;
        }

        return ($reflectionClass->newInstanceWithoutConstructor())->fromArray($value);
    }
}
