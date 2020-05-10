<?php

namespace JacobDeKeizer\Ccv\Generator\Factories;

use JacobDeKeizer\Ccv\Generator\PhpClass;
use JacobDeKeizer\Ccv\Generator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;

class PhpClassFactory
{
    public static function make(string $url): PhpClass
    {
        $object = json_decode(file_get_contents('https://demo.ccvshop.nl' . $url), true);

        $pathParts = self::makePathParts($url);

        [$properties, $classes] = self::makePropertiesAndClasses($pathParts, $object);

        return new PhpClass(
            self::makeNamespace($pathParts),
            $pathParts[count($pathParts) - 1],
            $properties,
            $classes
        );
    }

    private static function makePropertiesAndClasses(array $pathParts, array $object): array
    {
        /** @var Property[] $properties */
        $properties = [];

        /** @var PhpClass[] $classes */
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
            if ($property['type'] === 'object') {
                $makeObject($propertyName, $property);
            }

            if ($property['type'] === 'array') {
                $arrayItem = $property['items'][0];

                if (isset($arrayItem['type']) && $arrayItem['type'] === 'object') {
                    $makeObject($propertyName, $property);
                } elseif (isset($arrayItem['$ref'])) {
                    $makeRef($arrayItem);
                    $property['items'][0] = $arrayItem;
                }
            }

            if (isset($property['$ref'])) {
                $makeRef($property);
            }

            $properties[] = PropertyFactory::make($propertyName, $property);
        }

        return [$properties, $classes];
    }

    private static function makeChildObject(string $className, array $pathParts, array $object): PhpClass
    {
        if (isset($object['$ref'])) {
            return self::make($object['$ref']);
        } else {
            $childObjectParts = $pathParts;
            $childObjectParts[count($childObjectParts) - 1] = $className;

            [$childProperties, $childClasses] = self::makePropertiesAndClasses($pathParts, $object);

            return new PhpClass(
                self::makeNamespace($childObjectParts),
                $className,
                $childProperties,
                $childClasses
            );
        }
    }

    private static function makeNamespace(array $pathParts): string
    {
        return sprintf(sprintf('JacobDeKeizer\Ccv\Models\%s\%s', $pathParts[0], $pathParts[1]));
    }

    /**
     * @param string $schemaUrl https://demo.ccvshop.nl/API/Schema/internal.resource.orders.post.v1.json
     * @return array [ Resource, Orders, Post ]
     */
    private static function makePathParts(string $schemaUrl): array
    {
        $parts = explode('.', $schemaUrl);

        $count = count($parts);

        return [
            Str::studly($parts[$count - 5]),
            Str::studly($parts[$count - 4]),
            Str::studly($parts[$count - 3]),
        ];
    }
}

