<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Writers;

use JacobDeKeizer\CcvGenerator\Properties\Property;

class PropertiesWriter
{
    /**
     * @param Property[] $properties
     */
    public static function writeProperties(CodeWriter $codeWriter, array $properties): void
    {
        foreach ($properties as $property) {
            $codeWriter->insertNewLine();
            $property->writeProperty($codeWriter);
        }
    }

    /**
     * @param Property[] $properties
     */
    public static function writeMethods(CodeWriter $codeWriter, array $properties, bool $setPropertyFilled = true): void
    {
        foreach ($properties as $property) {
            $codeWriter->insertNewLine();
            $property->writeGetter($codeWriter);
        }

        foreach ($properties as $property) {
            $codeWriter->insertNewLine();
            $property->writeSetter($codeWriter, $setPropertyFilled);
        }

        $hasConvertCode = false;

        foreach ($properties as $property) {
            if ($property->hasConvertCode()) {
                $hasConvertCode = true;
                break;
            }
        }

        if (!$hasConvertCode) {
            return;
        }

        $codeWriter->insertNewLine();
        $codeWriter->openMethod('protected function convertFromArrayData(string $key, $value)');

        foreach ($properties as $property) {
            if ($property->hasConvertCode()) {
                $property->writeConvertCode($codeWriter);
                $codeWriter->insertNewLine();
            }
        }

        $codeWriter->writeLine('return $value;');
        $codeWriter->closeMethod();
    }
}
