<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

use JacobDeKeizer\CcvGenerator\Constants\Php;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

abstract class Property
{
    protected string $name;

    protected string $description;

    protected bool $nullable;

    protected bool $required;

    public function __construct(string $name, string $description, bool $nullable, bool $required)
    {
        $this->name = $name;
        $this->description = $description;
        $this->nullable = $nullable;
        $this->required = $required;
    }

    abstract protected function getDocblockType(bool $supportsVariadic = false): string;

    abstract protected function getPhpType(): string;

    public function writeProperty(CodeWriter $codeWriter, bool $initialize = false): void
    {
        $codeWriter->writeMultilineDocblock([
            '@var ' . $this->getDocblockType() . ' ' . $this->description,
        ]);

        $property = sprintf('private %s $%s', $this->getPhpType(), $this->name);

        if ($initialize && $this->isNullable()) {
            $codeWriter->writeLine($property . ' = null;');
        } else {
            $codeWriter->writeLine($property . ';');
        }
    }

    public function writeGetter(CodeWriter $codeWriter): void
    {
        $codeWriter->writeMultilineDocblock($this->extendDocblock([
            '@return ' . $this->getDocblockType() . ' ' . $this->description,
        ]));
        $codeWriter->openMethod('public function get' . $this->getMethodName() . '(): ' . $this->getPhpType());
        $codeWriter->writeLine('return $this->' . $this->name . ';');
        $codeWriter->closeMethod();
    }

    public function writeSetter(CodeWriter $codeWriter): void
    {
        $codeWriter->writeMultilineDocblock($this->extendDocblock([
            '@param ' . $this->getDocblockType(true) . ' ' . $this->getVariable() . ' '  . $this->description,
            '@return self',
        ]));
        $codeWriter->openMethod(sprintf(
            'public function set%s(%s): self',
            $this->getMethodName(),
            $this->getMethodParameterSignature()
        ));
        $codeWriter->writeLine('$this->' . $this->name . ' = ' . $this->getVariable() . ';');
        $codeWriter->writeLine('return $this;');
        $codeWriter->closeMethod();
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

    protected function getNullDocblockSuffix(): string
    {
        return $this->isNullable() ? '|null' : '';
    }

    protected function isNullable(): bool
    {
        return $this->nullable || !$this->required;
    }

    private function getMethodName(): string
    {
        return ucfirst($this->getName());
    }

    private function extendDocblock(array $lines): array
    {
        if ($this->isDeprecated()) {
            $lines[] = $this->getDeprecatedDocblock();
        }

        return $lines;
    }

    private function isDeprecated(): bool
    {
        return str_starts_with($this->description, 'Deprecated');
    }

    private function getDeprecatedDocblock(): string
    {
        $seeProps = [
            'See',
            'Please use',
            'Use the',
            'Use property',
            'use',
        ];

        $text = '';

        foreach ($seeProps as $seeProp) {
            if (strpos($this->description, $seeProp)) {
                $text = ' ' . substr($this->description, strpos($this->description, $seeProp));
                break;
            }
        }

        return '@deprecated' . $text;
    }
}
