<?php

namespace JacobDeKeizer\Ccv\Traits;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Support\Str;
use ReflectionException;
use ReflectionMethod;

trait FromArray
{
    /**
     * @return static
     */
    protected static function createFromArray(array $data)
    {
        $instance = new self;

        foreach ($data as $key => $value) {
            $setMethod = 'set' . Str::studly(strtolower($key));

            if (method_exists($instance, $setMethod) === false) {
                continue;
            }

            try {
                $reflectionMethod = new ReflectionMethod($instance, $setMethod);

                $firstParameter = $reflectionMethod->getParameters()[0] ?? null;
                $parameterReflectionClass = $firstParameter ? $firstParameter->getClass() : null;

                if ($parameterReflectionClass !== null
                    && $parameterReflectionClass->implementsInterface(Model::class)) {
                    $value = ($parameterReflectionClass->newInstanceWithoutConstructor())->fromArray($value ?? []);
                } else {
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
}
