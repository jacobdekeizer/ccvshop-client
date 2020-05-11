<?php

namespace JacobDeKeizer\Ccv\Generator\Properties;

abstract class Property
{
    private const INDENT = '    ';

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

    abstract protected function getDocblockType(): string;

    abstract protected function getPhpType(): string;

    public function getProperty(): string
    {
        return self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @var ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . ' private $' . $this->name . ';' . PHP_EOL;
    }

    public function getGetter(): string
    {
        return self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @return ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . 'public function get' . ucfirst($this->name) . '(): ' . $this->getPhpType() . PHP_EOL
            . self::INDENT . '{' . PHP_EOL
            . self::INDENT . self::INDENT . 'return $this->' . $this->name . ';' . PHP_EOL
            . self::INDENT . '}' . PHP_EOL;
    }

    public function getSetter(): string
    {
        return self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @param ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . self::INDENT . ' * @return self' . PHP_EOL
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . 'public function set' . ucfirst($this->name) . '($' . $this->name . '): self' . PHP_EOL
            . self::INDENT . '{' . PHP_EOL
            . self::INDENT . self::INDENT . '$this->' . $this->name . ' = $' . $this->name . ';' . PHP_EOL
            . self::INDENT . self::INDENT . '$this->propertyFilled(\'' . $this->name . '\');' . PHP_EOL
            . self::INDENT . self::INDENT . 'return $this;' . PHP_EOL
            . self::INDENT . '}' . PHP_EOL;
    }
}
