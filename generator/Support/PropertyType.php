<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Support;

use JacobDeKeizer\CcvGenerator\Dto\PropertyTypeInfo;

class PropertyType
{
    public static function getInfo(string $rawType): PropertyTypeInfo
    {
        $nullPos = strpos($rawType, '|null');

        if ($nullPos !== false) {
            return new PropertyTypeInfo(substr($rawType, 0, $nullPos), true);
        }

        if (str_starts_with($rawType, 'null|') !== false) {
            return new PropertyTypeInfo(substr($rawType, strlen('null|'), strlen($rawType)), true);
        }

        if (str_contains($rawType, '|object')) {
            // some field types are defined as string|object, we force an object here...
            return new PropertyTypeInfo('object', false);
        }

        return new PropertyTypeInfo($rawType, false);
    }
}
