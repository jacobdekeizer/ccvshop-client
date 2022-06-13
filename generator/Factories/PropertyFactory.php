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
use JacobDeKeizer\CcvGenerator\Support\PropertyType;

class PropertyFactory
{
    public static function make(string $propertyName, array $property): Property
    {
        $propertyName = Str::camel($propertyName);
        $required = self::isRequired($property);
        $description = trim($property['description'] ?? '');

        $propertyInfo = PropertyType::getInfo($property['type']);

        $nullable = $propertyInfo->nullable;
        $type = $propertyInfo->type;

        switch ($type) {
            case 'array':
                return new ArrayProperty(
                    self::make($propertyName, $property['items'][0]),
                    $propertyName,
                    $description,
                    $nullable,
                    $required
                );
            case 'bool':
            case 'boolean':
                return new BoolProperty(
                    $propertyName,
                    $description,
                    $nullable,
                    $required
                );
            case 'number':
            case 'float':
                return new FloatProperty(
                    $propertyName,
                    $description,
                    $nullable,
                    $required
                );
            case 'integer':
            case 'int':
                return new IntegerProperty(
                    $propertyName,
                    $description,
                    $nullable,
                    $required
                );
            case 'object':
                return new ObjectProperty(
                    isset($property['phpClass']) ? $property['phpClass']->getNamespacedClass() : 'object',
                    $propertyName,
                    $description,
                    $nullable,
                    $required
                );
            case 'date':
            case 'string':
                return new StringType(
                    $propertyName,
                    $description,
                    $nullable,
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
