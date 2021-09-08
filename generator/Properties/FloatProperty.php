<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

class FloatProperty extends Property
{
    private bool $nullable;

    public function __construct(bool $nullable, string $name, string $description, bool $required)
    {
        parent::__construct($name, $description, $required);

        $this->nullable = $nullable;
    }

    protected function getDocblockType(): string
    {
        return 'float' . ($this->nullable || !$this->required ? '|null' : '');
    }

    protected function getPhpType(): string
    {
        return ($this->nullable || !$this->required ? '?' : '') . 'float';
    }
}
