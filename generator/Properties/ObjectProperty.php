<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

class ObjectProperty extends Property
{
    private string $objectClass;

    public function __construct(string $objectClass, string $name, string $description, bool $nullable, bool $required)
    {
        parent::__construct($name, $description, $nullable, $required);

        $this->objectClass = $objectClass;
    }

    protected function getDocblockType(bool $supportsVariadic = false): string
    {
        return $this->objectClass . $this->getNullDocblockSuffix();
    }

    protected function getPhpType(): string
    {
        return ($this->isNullable() ? '?' : '') . $this->objectClass;
    }
}
