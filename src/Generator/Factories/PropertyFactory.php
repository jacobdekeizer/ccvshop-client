<?php

namespace JacobDeKeizer\Ccv\Generator\Factories;

use JacobDeKeizer\Ccv\Generator\Properties\ArrayProperty;
use JacobDeKeizer\Ccv\Generator\Properties\BoolProperty;
use JacobDeKeizer\Ccv\Generator\Properties\FloatProperty;
use JacobDeKeizer\Ccv\Generator\Properties\IntegerProperty;
use JacobDeKeizer\Ccv\Generator\Properties\ObjectProperty;
use JacobDeKeizer\Ccv\Generator\Properties\Property;
use JacobDeKeizer\Ccv\Generator\Properties\StringType;

class PropertyFactory
{
    public static function make(string $propertyName, array $property): Property
    {
        $required = $property['required'] ?? false;
        $description = $property['description'] ?? '';
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

        switch ($type) {
            case 'array':
                return new ArrayProperty(
                    $nullable,
                    self::make($propertyName, $property['items'][0]),
                    $propertyName,
                    $description,
                    $required
                );
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
            case 'string':
                return new StringType(
                    $nullable,
                    $propertyName,
                    $description,
                    $required
                );
        }

        throw new \Exception('unkown type: ' . print_r($property));
    }
}

