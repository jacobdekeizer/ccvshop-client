<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

class FloatProperty extends Property
{
    protected function getDocblockType(bool $supportsVariadic = false): string
    {
        return 'float' . $this->getNullDocblockSuffix();
    }

    protected function getPhpType(): string
    {
        return ($this->isNullable() ? '?' : '') . 'float';
    }
}
