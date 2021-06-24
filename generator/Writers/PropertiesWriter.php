<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Writers;

use JacobDeKeizer\CcvGenerator\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;

class PropertiesWriter
{
    /**
     * @param Property[] $properties
     */
    public static function writeProperties(array $properties): string
    {
        $content = '';

        foreach ($properties as $property) {
            $content .= $property->getProperty() . PHP_EOL;
        }

        return $content;
    }

    /**
     * @param Property[] $properties
     */
    public static function writeMethods(array $properties, bool $setPropertyFilled = true): string
    {
        $content = '';

        foreach ($properties as $property) {
            $content .= PHP_EOL . $property->getGetter();
        }

        foreach ($properties as $property) {
            $content .= PHP_EOL . $property->getSetter($setPropertyFilled);
        }

        // start on convert code for the to array method for some properties
        $convertCode = null;

        foreach ($properties as $property) {
            $tempConvertCode = $property->getConvertCode();

            if ($tempConvertCode !== null) {
                $convertCode .= $tempConvertCode;
            }
        }

        if ($convertCode !== null) {
            $content .= PHP_EOL
                . Php::INDENTATION . 'protected function convertFromArrayData(string $key, $value)' . PHP_EOL
                . Php::INDENTATION . '{' . PHP_EOL
                . $convertCode . PHP_EOL
                . Php::INDENTATION . Php::INDENTATION . 'return $value;' . PHP_EOL
                . Php::INDENTATION . '}' . PHP_EOL;
        }

        return $content;
    }
}