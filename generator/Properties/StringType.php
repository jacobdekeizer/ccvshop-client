<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

class StringType extends Property
{
    protected function getDocblockType(bool $supportsVariadic = false): string
    {
        return 'string' . $this->getNullDocblockSuffix();
    }

    protected function getPhpType(): string
    {
        return ($this->isNullable() ? '?' : '') . 'string';
    }
}
