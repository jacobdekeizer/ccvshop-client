<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

use JacobDeKeizer\CcvGenerator\Constants\Php;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

abstract class Property
{
    protected const INDENT = Php::INDENTATION;

    protected string $name;

    protected string $description;

    protected bool $required;

    public function __construct(string $name, string $description, bool $required)
    {
        $this->description = $description;
        $this->required = $required;
        $this->name = $name;
    }

    abstract protected function getDocblockType(): string;

    abstract protected function getPhpType(): string;

    public function writeConvertCode(CodeWriter $codeWriter): void
    {
        // ..
    }

    public function hasConvertCode(): bool
    {
        return false;
    }

    public function writeProperty(CodeWriter $codeWriter): void
    {
        $codeWriter->writeMultilineDocblock([
            '@var ' . $this->getDocblockType() . ' ' . $this->description,
        ]);
        $codeWriter->writeLine('private $' . $this->name . ';');
    }

    public function writeGetter(CodeWriter $codeWriter): void
    {
        $codeWriter->writeMultilineDocblock([
            '@return ' . $this->getDocblockType() . ' ' . $this->description,
        ]);
        $codeWriter->openMethod('public function get' . $this->getMethodName() . '(): ' . $this->getPhpType());
        $codeWriter->writeLine('return $this->' . $this->name . ';');
        $codeWriter->closeMethod();
    }

    public function writeSetter(CodeWriter $codeWriter, bool $setPropertyFilled = true): void
    {
        $codeWriter->writeMultilineDocblock([
            '@param ' . $this->getDocblockType() . ' ' . $this->getVariable() . ' '  . $this->description,
            '@return self',
        ]);
        $codeWriter->openMethod(sprintf(
            'public function set%s(%s): self',
            $this->getMethodName(),
            $this->getMethodParameterSignature()
        ));
        $codeWriter->writeLine('$this->' . $this->name . ' = ' . $this->getVariable() . ';');

        if ($setPropertyFilled) {
            $codeWriter->writeLine('$this->propertyFilled(\'' . $this->name . '\');');
        }

        $codeWriter->writeLine('return $this;');
        $codeWriter->closeMethod();
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

    private function getMethodName(): string
    {
        return ucfirst($this->getName());
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
