<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

class BoolProperty extends Property
{
    protected function getDocblockType(bool $supportsVariadic = false): string
    {
        return 'bool' . $this->getNullDocblockSuffix();
    }

    protected function getPhpType(): string
    {
        return ($this->isNullable() ? '?' : '') . 'bool';
    }
}
