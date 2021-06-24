<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

use JacobDeKeizer\CcvGenerator\Php;

abstract class Property
{
    protected const INDENT = Php::INDENTATION;

    /**
     * @var string
     */
    protected $name;

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

    public function getConvertCode(): ?string
    {
        return null;
    }

    public function getProperty(): string
    {
        return self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @var ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . 'private $' . $this->name . ';' . PHP_EOL;
    }

    public function getGetter(): string
    {
        return self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @return ' . $this->getDocblockType() . ' ' . $this->description . PHP_EOL
            . ($this->isDeprecated() ? self::INDENT . ' * ' . $this->getDeprecatedDocblock() . PHP_EOL : '')
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . 'public function get' . ucfirst($this->name) . '(): ' . $this->getPhpType() . PHP_EOL
            . self::INDENT . '{' . PHP_EOL
            . self::INDENT . self::INDENT . 'return $this->' . $this->name . ';' . PHP_EOL
            . self::INDENT . '}' . PHP_EOL;
    }

    public function getSetter(bool $setPropertyFilled = true): string
    {
        $content = self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @param '
                . $this->getDocblockType() . ' ' . $this->getVariable() . ' '  . $this->description . PHP_EOL
            . self::INDENT . ' * @return self' . PHP_EOL
            . ($this->isDeprecated() ? self::INDENT . ' * ' . $this->getDeprecatedDocblock() . PHP_EOL : '')
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . 'public function set' . ucfirst($this->name)
                . '(' . $this->getMethodParameterSignature() . '): self' . PHP_EOL
            . self::INDENT . '{' . PHP_EOL
            . self::INDENT . self::INDENT . '$this->' . $this->name . ' = ' . $this->getVariable() . ';' . PHP_EOL;

        if ($setPropertyFilled) {
            $content .= self::INDENT . self::INDENT . '$this->propertyFilled(\'' . $this->name . '\');' . PHP_EOL;
        }

        $content .= self::INDENT . self::INDENT . 'return $this;' . PHP_EOL;
        $content .= self::INDENT . '}' . PHP_EOL;

        return $content;
    }

    public function isDeprecated(): bool
    {
        return substr($this->description, 0, 12) === 'Deprecated. ';
    }

    public function getMethodParameterSignature(): string
    {
        return $this->getPhpType() . ' ' . $this->getVariable();
    }

    public function getVariable(): string
    {
        return '$' . $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function getDeprecatedDocblock(): string
    {
        $seeProps = [
            'See',
            'Please use',
            'Use the',
        ];

        $text = '';

        foreach ($seeProps as $seeProp) {
            if (strpos($this->description, $seeProp)) {
                $text = ' ' . substr($this->description, (strpos($this->description, $seeProp) ?: -1));
                break;
            }
        }

        return '@deprecated' . $text;
    }
}
