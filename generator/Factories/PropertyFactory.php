<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Factories;

use JacobDeKeizer\CcvGenerator\Properties\ArrayProperty;
use JacobDeKeizer\CcvGenerator\Properties\BoolProperty;
use JacobDeKeizer\CcvGenerator\Properties\FloatProperty;
use JacobDeKeizer\CcvGenerator\Properties\IntegerProperty;
use JacobDeKeizer\CcvGenerator\Properties\ObjectProperty;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\CcvGenerator\Properties\StringType;
use JacobDeKeizer\Ccv\Support\Str;

class PropertyFactory
{
    public static function make(string $propertyName, array $property): Property
    {
        $propertyName = Str::camel($propertyName);
        $required = self::isRequired($property);
        $description = trim($property['description'] ?? '');
        $nullable = false;
        $type = $property['type'];

        $nullPos = strpos($type, '|null');
        if ($nullPos !== false) {
            $nullable = true;
            $type = substr($type, 0, $nullPos);
        } else {
            $nullPos = strpos($type, 'null|');

            if ($nullPos !== false) {
                $nullable = true;
                $type = substr($type, strlen('null|'), strlen($type));
            }
        }

        if (strpos($type, '|object') !== false) {
            // some field types are defined as string|object, we fore an object here..
            $type = 'object';
        }

        switch ($type) {
            case 'array':
                return new ArrayProperty(
                    $nullable,
                    self::make($propertyName, $property['items'][0]),
                    $propertyName,
                    $description,
                    $required
                );
            case 'bool':
            case 'boolean':
                return new BoolProperty(
                    $nullable,
                    $propertyName,
                    $description,
                    $required
                );
            case 'number':
            case 'float':
                return new FloatProperty(
                    $nullable,
                    $propertyName,
                    $description,
                    $required
                );
            case 'integer':
            case 'int':
                return new IntegerProperty(
                    $nullable,
                    $propertyName,
                    $description,
                    $required
                );
            case 'object':
                return new ObjectProperty(
                    $nullable,
                    isset($property['phpClass']) ? $property['phpClass']->getNamespacedClass() : 'object',
                    $propertyName,
                    $description,
                    $required
                );
            case 'date':
            case 'string':
                return new StringType(
                    $nullable,
                    $propertyName,
                    $description,
                    $required
                );
        }

        throw new \Exception('Unknown property type: ' . json_encode($property));
    }

    private static function isRequired(array $property): bool
    {
        $required = $property['required'] ?? false;

        if (is_bool($required)) {
            return $required;
        }

        return $required === 'true';
    }
}
