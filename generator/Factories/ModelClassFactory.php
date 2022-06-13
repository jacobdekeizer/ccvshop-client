<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Factories;

use JacobDeKeizer\CcvGenerator\Classes\ModelClass;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;

class ModelClassFactory
{
    /**
     * @var array<string, ModelClass>
     */
    private static array $MEMORY = [];

    public static function make(string $url): ModelClass
    {
        if (isset(self::$MEMORY[$url])) {
            return self::$MEMORY[$url];
        }

        $object = json_decode(file_get_contents('https://demo.ccvshop.nl' . $url), true);

        $pathParts = self::makePathParts($url);

        $modelClass = new ModelClass(self::makeNamespace($pathParts), $pathParts[count($pathParts) - 1]);

        self::$MEMORY[$url] = $modelClass;

        [$properties, $classes] = self::makePropertiesAndClasses($pathParts, $object);

        $modelClass->setProperties($properties);
        $modelClass->setClasses($classes);

        return $modelClass;
    }

    private static function makePropertiesAndClasses(array $pathParts, array $object): array
    {
        /** @var Property[] $properties */
        $properties = [];

        /** @var ModelClass[] $classes */
        $classes = [];

        $makeObject = static function (string $propertyName, array &$property) use ($pathParts, &$classes) {
            $childPhpClass = self::makeChildObject(Str::studly($propertyName), $pathParts, $property);

            $classes[] = $childPhpClass;
            $property['phpClass'] = $childPhpClass;
        };

        $makeRef = static function (array &$item) use (&$classes) {
            $childPhpClass = self::make($item['$ref']);

            $classes[] = $childPhpClass;
            $item['phpClass'] = $childPhpClass;
            $item['type'] = 'object';
        };

        foreach ($object['properties'] as $propertyName => $property) {
            if ($property['type'] === 'object' || $property['type'] === 'object|null') {
                $makeObject($propertyName, $property);
            }

            if ($property['type'] === 'array') {
                if (!isset($property['items']) && isset($property['properties'])) {
                    $arrayItem = null;

                    foreach ($property['properties'] as $key => $value) {
                        $arrayItem = $value;
                        break;
                    }
                } else {
                    $arrayItem = $property['items'][0];
                }

                if (isset($arrayItem['type']) && ($arrayItem['type'] === 'object' || $arrayItem['type'] === 'object|null')) {
                    $makeObject($propertyName, $arrayItem);
                } elseif (isset($arrayItem['$ref'])) {
                    $makeRef($arrayItem);
                }

                $property['items'][0] = $arrayItem;
            }

            if (isset($property['$ref'])) {
                $makeRef($property);
            }

            $properties[] = PropertyFactory::make($propertyName, $property);
        }

        return [$properties, $classes];
    }

    private static function makeChildObject(string $className, array $pathParts, array $object): ModelClass
    {
        if (isset($object['$ref'])) {
            return self::make($object['$ref']);
        } else {
            $childObjectParts = $pathParts;

            [$childProperties, $childClasses] = self::makePropertiesAndClasses($pathParts, $object);

            $childObjectParts[] = 'Child';

            return new ModelClass(
                self::makeNamespace($childObjectParts),
                $className,
                $childProperties,
                $childClasses
            );
        }
    }

    private static function makeNamespace(array $pathParts): string
    {
        return sprintf('JacobDeKeizer\Ccv\Models\%s', implode('\\', $pathParts));
    }

    /**
     * @param string $schemaUrl https://demo.ccvshop.nl/API/Schema/internal.resource.orders.post.v1.json
     * @return array [ Internal, Resource, Orders, Post ]
     */
    private static function makePathParts(string $schemaUrl): array
    {
        $schemaUrl = str_replace('/API/Schema/', '', $schemaUrl);

        $parts = explode('.', $schemaUrl);

        $parts = array_slice($parts, 0, -2);

        return array_map(static fn(string $part): string => Str::studly($part), $parts);
    }
}
