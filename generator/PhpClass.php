<?php

namespace JacobDeKeizer\CcvGenerator;

use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;

class PhpClass
{
    private const INDENT = '    ';

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Property[]
     */
    private $properties;

    /**
     * @var PhpClass[]
     */
    private $classes;

    public function __construct(string $namespace, string $name, array $properties, array $classes)
    {
        $this->namespace = $namespace;

        if (in_array(Str::snake($name), Php::RESERVED_KEYWORDS)) {
            $this->name = $name . 'Item';
        } else {
            $this->name = $name;
        }

        $this->properties = $properties;
        $this->classes = $classes;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @return PhpClass[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    public function getRelativePath(): string
    {
        return str_replace('JacobDeKeizer\Ccv', '', $this->namespace) . '\\' . $this->name . '.php';
    }

    public function getNamespacedClass(): string
    {
        return '\\' . $this->namespace . '\\' . $this->name;
    }

    public function toString(): string
    {
        $classString = '<?php' . PHP_EOL
            . PHP_EOL
            . 'namespace ' . $this->namespace . ';' . PHP_EOL
            . PHP_EOL
            . 'use JacobDeKeizer\Ccv\Contracts\Model;' . PHP_EOL;

        $classString .= 'use JacobDeKeizer\Ccv\Traits\FromArray;' . PHP_EOL;
        $classString .= 'use JacobDeKeizer\Ccv\Traits\ToArray;' . PHP_EOL;
        $classString .= PHP_EOL;

        $classString .= 'class ' . $this->name . ' implements Model' . PHP_EOL;
        $classString .= '{' . PHP_EOL;

        $classString .= self::INDENT . 'use FromArray, ToArray;' . PHP_EOL;
        $classString .= PHP_EOL;

        foreach ($this->properties as $property) {
            $classString .= $property->getProperty() . PHP_EOL;
        }

        $classString .= self::INDENT . '/**' . PHP_EOL
            . self::INDENT . ' * @return self' . PHP_EOL
            . self::INDENT . ' */' . PHP_EOL
            . self::INDENT . 'public static function fromArray(array $data): Model' .PHP_EOL
            . self::INDENT . '{' . PHP_EOL
            . self::INDENT . self::INDENT . 'return self::createFromArray($data);' . PHP_EOL
            . self::INDENT . '}' . PHP_EOL;

        foreach ($this->properties as $property) {
            $classString .= PHP_EOL . $property->getGetter();
        }

        foreach ($this->properties as $property) {
            $classString .= PHP_EOL . $property->getSetter();
        }

        // start on convert code for the to array method for some properties
        $convertCode = null;

        foreach ($this->properties as $property) {
            $tempConvertCode = $property->getConvertCode();

            if ($tempConvertCode !== null) {
                $convertCode .= $tempConvertCode;
            }
        }

        if ($convertCode !== null) {
            $classString .= PHP_EOL
                . self::INDENT . 'protected function convertFromArrayData(string $key, $value)' . PHP_EOL
                . self::INDENT . '{' . PHP_EOL
                . $convertCode . PHP_EOL
                . self::INDENT . self::INDENT . 'return $value;' . PHP_EOL
                . self::INDENT . '}' . PHP_EOL;
        }

        $classString .= '}' . PHP_EOL;

        return $classString;
    }
}
