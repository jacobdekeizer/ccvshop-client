<?php

namespace JacobDeKeizer\CcvGenerator\Properties;

use JacobDeKeizer\Ccv\Support\Str;

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

    public function getConvertCode(): ?string
    {
        $startIndent = self::INDENT . self::INDENT;

        $snakeName = Str::snake($this->name);

        return $startIndent . sprintf('if ($key === \'%s\') {', $snakeName) . PHP_EOL
            . $startIndent . self::INDENT . '$items = [];' . PHP_EOL
            . PHP_EOL
            . $startIndent . self::INDENT . 'foreach ($value as $item) {' . PHP_EOL
            . $startIndent . self::INDENT . self::INDENT . sprintf(
                '$items[] = %s::fromArray($item);',
                $this->getPropertyType()
            ) . PHP_EOL
            . $startIndent . self::INDENT . '}' . PHP_EOL
            . PHP_EOL
            . $startIndent . self::INDENT . 'return $items;' . PHP_EOL
            . $startIndent . '}' . PHP_EOL;
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
