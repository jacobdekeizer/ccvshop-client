<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Traits;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Support\Str;
use ReflectionException;
use ReflectionMethod;
use ReflectionParameter;
use ReflectionType;

trait FromArray
{
    /**
     * @return static
     */
    protected static function createFromArray(array $data)
    {
        $instance = new self();

        foreach ($data as $key => $value) {
            $setMethod = 'set' . Str::studly(strtolower($key));

            if (method_exists($instance, $setMethod) === false) {
                continue;
            }

            try {
                $reflectionMethod = new ReflectionMethod($instance, $setMethod);

                $firstParameter = $reflectionMethod->getParameters()[0] ?? null;
                $parameterReflectionClass = $firstParameter ? $firstParameter->getClass() : null;

                if (
                    $parameterReflectionClass !== null
                    && $parameterReflectionClass->implementsInterface(Model::class)
                ) {
                    $value = ($parameterReflectionClass->newInstanceWithoutConstructor())->fromArray($value ?? []);
                } else {
                    $value = $firstParameter !== null ? self::convertToType($firstParameter, $value) : $value;

                    $value = $instance->convertFromArrayData($key, $value);
                }
            } catch (ReflectionException $e) {
                continue;
            }

            $instance->$setMethod($value);
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
        $name = $type !== null ? $type->getName() : null;

        if ($type === null || $name === null) {
            return $value;
        }

        switch ($name) {
            case 'string':
                return self::convertValueFromType($type, $value, static fn($value) => (string) $value);
            case 'int':
                return self::convertValueFromType($type, $value, static fn($value) => (int) $value);
            case 'float':
                return self::convertValueFromType($type, $value, static fn($value) => (float) $value);
            default:
                return $value;
        }
    }

    private static function convertValueFromType(ReflectionType $type, $value, \Closure $convert)
    {
        if ($type->allowsNull()) {
            return $value !== null ? $convert($value) : null;
        }

        return $convert($value);
    }
}
