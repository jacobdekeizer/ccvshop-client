<?php

namespace JacobDeKeizer\Ccv\Generator\Properties;

class ArrayProperty extends Property
{
    /**
     * @var bool
     */
    private $nullable;

    /**
     * @var string
     */
    private $arrayType;

    public function __construct(bool $nullable, Property $arrayType, string $name, string $description, bool $required)
    {
        parent::__construct($name, $description, $required);

        $this->nullable = $nullable;
        $this->arrayType = $arrayType;
    }

    protected function getDocblockType(): string
    {
        return $this->arrayType->getDocblockType() . '[]' . ($this->nullable ? '|null' : '');
    }

    protected function getPhpType(): string
    {
        return ($this->nullable ? '?' : '') . 'array';
    }
}

