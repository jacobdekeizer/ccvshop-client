<?php

namespace JacobDeKeizer\Ccv\Generator\Properties;

abstract class Property
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $required;

    public function __construct(string $name, string $description, bool $required)
    {
        $this->description = $description;
        $this->required = $required;
        $this->name = $name;
    }

    protected abstract function getDocblockType(): string;

    protected abstract function getPhpType(): string;

    public function getProperty(): string
    {
        $indent = "\t";

        return $indent . '/**' . PHP_EOL
            . $indent . ' * @var ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . $indent . ' */' . PHP_EOL
            . $indent . ' private $' . $this->name . ';' . PHP_EOL;
    }

    public function getGetter(): string
    {
        $indent = "\t";

        return $indent . '/**' . PHP_EOL
            . $indent . ' * @return ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . $indent . ' */' . PHP_EOL
            . $indent . 'public function get' . ucfirst($this->name) . '(): ' . $this->getPhpType() . PHP_EOL
            . $indent . '{' . PHP_EOL
            . $indent . $indent . 'return $this->' . $this->name . ';' . PHP_EOL
            . $indent . '}' . PHP_EOL;
    }

    public function getSetter(): string
    {
        $indent = "\t";

        return $indent . '/**' . PHP_EOL
            . $indent . ' * @param ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . $indent . ' * @return self' . PHP_EOL
            . $indent . ' */' . PHP_EOL
            . $indent . 'public function set' . ucfirst($this->name) . '($' . $this->name . '): self' . PHP_EOL
            . $indent . '{' . PHP_EOL
            . $indent . $indent . '$this->' . $this->name . ' = $' . $this->name . ';' . PHP_EOL
            . $indent . $indent . 'return $this;' . PHP_EOL
            . $indent . '}' . PHP_EOL;
    }
}

