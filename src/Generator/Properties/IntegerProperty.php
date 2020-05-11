<?php

namespace JacobDeKeizer\Ccv\Generator\Properties;

class IntegerProperty extends Property
{
    /**
     * @var bool
     */
    private $nullable;

    public function __construct(bool $nullable, string $name, string $description, bool $required)
    {
        parent::__construct($name, $description, $required);

        $this->nullable = $nullable;
    }

    protected function getDocblockType(): string
    {
        return 'int' . ($this->nullable || !$this->required ? '|null' : '');
    }

    protected function getPhpType(): string
    {
        return ($this->nullable || !$this->required ? '?' : '') . 'int';
    }
}
