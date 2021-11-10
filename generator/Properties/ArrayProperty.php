<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

class ArrayProperty extends Property
{
    private Property $arrayType;

    public function __construct(Property $arrayType, string $name, string $description, bool $nullable, bool $required)
    {
        parent::__construct($name, $description, $nullable, $required);

        $this->arrayType = $arrayType;
    }

    public function getMethodParameterSignature(): string
    {
        if ($this->isObjectArray()) {
            return $this->getPropertyType() . ' ...' . $this->getVariable();
        }

        return parent::getMethodParameterSignature();
    }

    protected function getDocblockType(bool $supportsVariadic = false): string
    {
        $nullDocblock = $this->getNullDocblockSuffix();

        if ($this->isObjectArray() && $supportsVariadic) {
            return $this->getPropertyType() . $nullDocblock . ' ...' . $this->getVariable();
        }

        return $this->getPropertyType() . '[]' . $nullDocblock;
    }

    protected function getPhpType(): string
    {
        return ($this->isNullable() ? '?' : '') . 'array';
    }

    private function getPropertyType(): string
    {
        return str_replace('|null', '', $this->arrayType->getDocblockType());
    }

    private function isObjectArray(): bool
    {
        return $this->arrayType instanceof ObjectProperty;
    }
}
