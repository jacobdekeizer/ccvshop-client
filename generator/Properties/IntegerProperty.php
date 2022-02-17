<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

class IntegerProperty extends Property
{
    protected function getDocblockType(bool $supportsVariadic = false): string
    {
        return 'int' . $this->getNullDocblockSuffix();
    }

    protected function getPhpType(): string
    {
        return ($this->isNullable() ? '?' : '') . 'int';
    }
}
