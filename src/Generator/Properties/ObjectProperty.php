<?php

namespace JacobDeKeizer\Ccv\Generator\Properties;

class ObjectProperty extends Property
{
    /**
     * @var bool
     */
    private $nullable;

    /**
     * @var string
     */
    private $objectClass;

    public function __construct(bool $nullable, string $objectClass, string $name, string $description, bool $required)
    {
        parent::__construct($name, $description, $required);

        $this->nullable = $nullable;
        $this->objectClass = $objectClass;
    }

    protected function getDocblockType(): string
    {
        return $this->objectClass . ($this->nullable ? '|null' : '');
    }

    protected function getPhpType(): string
    {
        return ($this->nullable ? '?' : '') . $this->objectClass;
    }
}

