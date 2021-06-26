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
    private static $MEMORY = [];

    public static function make(string $url, string $namespacePrefix): ModelClass
    {
        $key = $namespacePrefix . $url;

        if (isset(self::$MEMORY[$key])) {
            return self::$MEMORY[$key];
        }

        $object = json_decode(file_get_contents('https://demo.ccvshop.nl' . $url), true);

        $pathParts = self::makePathParts($url);

        $modelClass = new ModelClass(
            self::makeNamespace($pathParts, $namespacePrefix),
            $pathParts[count($pathParts) - 1],
        );

        self::$MEMORY[$key] = $modelClass;

        [$properties, $classes] = self::makePropertiesAndClasses($pathParts, $object, $namespacePrefix);

        $modelClass->setProperties($properties);
        $modelClass->setClasses($classes);

        return $modelClass;
    }

    private static function makePropertiesAndClasses(array $pathParts, array $object, string $namespacePrefix): array
    {
        /** @var Property[] $properties */
        $properties = [];

        /** @var ModelClass[] $classes */
        $classes = [];

        $makeObject = static function (
            string $propertyName,
            array &$property
        ) use (
            $pathParts,
            &$classes,
            $namespacePrefix
        ) {
            $childPhpClass = self::makeChildObject(Str::studly($propertyName), $pathParts, $property, $namespacePrefix);

            $classes[] = $childPhpClass;
            $property['phpClass'] = $childPhpClass;
        };

        $makeRef = static function (array &$item) use (&$classes, $namespacePrefix) {
            $childPhpClass = self::make($item['$ref'], $namespacePrefix);

            $classes[] = $childPhpClass;
            $item['phpClass'] = $childPhpClass;
            $item['type'] = 'object';
        };

        foreach ($object['properties'] as $propertyName => $property) {
            if ($property['type'] === 'object') {
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

                if (isset($arrayItem['type']) && $arrayItem['type'] === 'object') {
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

    private static function makeChildObject(
        string $className,
        array $pathParts,
        array $object,
        string $namespacePrefix
    ): ModelClass {
        if (isset($object['$ref'])) {
            return self::make($object['$ref'], $namespacePrefix);
        } else {
            $childObjectParts = $pathParts;
            $childObjectParts[count($childObjectParts) - 1] = $className;

            [$childProperties, $childClasses] = self::makePropertiesAndClasses($pathParts, $object, $namespacePrefix);

            return new ModelClass(
                self::makeNamespace($childObjectParts, $namespacePrefix . '\Child'),
                $className,
                $childProperties,
                $childClasses
            );
        }
    }

    private static function makeNamespace(array $pathParts, string $namespacePrefix): string
    {
        return sprintf('JacobDeKeizer\Ccv\Models\%s\%s', $namespacePrefix, $pathParts[0]);
    }

    /**
     * @param string $schemaUrl https://demo.ccvshop.nl/API/Schema/internal.resource.orders.post.v1.json
     * @return array [ Orders, Post ]
     */
    private static function makePathParts(string $schemaUrl): array
    {
        $schemaUrl = str_replace('/API/Schema/', '', $schemaUrl);
        $parts = explode('.', $schemaUrl);

        $count = count($parts);

        return [
            Str::studly($parts[$count - 4]),
            Str::studly($parts[$count - 3]),
        ];
    }
}
