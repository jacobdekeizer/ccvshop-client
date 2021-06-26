<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Properties;

use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

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

    public function writeConvertCode(CodeWriter $codeWriter): void
    {
        if (!$this->hasConvertCode()) {
            return;
        }

        $snakeName = Str::snake($this->name);

        $codeWriter->writeLine(sprintf('if ($key === \'%s\') {', $snakeName));
        $codeWriter->indent();
        $codeWriter->writeLine('$items = [];');
        $codeWriter->insertNewLine();
        $codeWriter->writeLine('foreach ($value as $item) {');
        $codeWriter->indent();
        $codeWriter->writeLine(sprintf('$items[] = %s::fromArray($item);', $this->getPropertyType()));
        $codeWriter->outdent();
        $codeWriter->writeLine('}');
        $codeWriter->insertNewLine();
        $codeWriter->writeLine('return $items;');
        $codeWriter->outdent();
        $codeWriter->writeLine('}');
    }

    public function hasConvertCode(): bool
    {
        return $this->arrayType instanceof ObjectProperty;
    }

    protected function getDocblockType(): string
    {
        return $this->getPropertyType() . '[]'
            . ($this->nullable || !$this->required ? '|null' : '');
    }

    protected function getPhpType(): string
    {
        return ($this->nullable || !$this->required ? '?' : '') . 'array';
    }

    private function getPropertyType(): string
    {
        return str_replace('|null', '', $this->arrayType->getDocblockType());
    }
}
