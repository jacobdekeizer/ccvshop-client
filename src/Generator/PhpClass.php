<?php

namespace JacobDeKeizer\Ccv\Generator;

use JacobDeKeizer\Ccv\Generator\Properties\Property;

class PhpClass
{
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
        $this->name = $name;
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
        $classString = '<?php ' . PHP_EOL
            . PHP_EOL
            . 'namespace ' . $this->namespace . ';' . PHP_EOL
            . PHP_EOL
            . 'use JacobDeKeizer\Ccv\Contracts\Model;' . PHP_EOL;

        $classString .= 'use JacobDeKeizer\Ccv\Traits\FromArray;' . PHP_EOL;
        $classString .= 'use JacobDeKeizer\Ccv\Traits\ToArray;' . PHP_EOL;
        $classString .= PHP_EOL;

        $classString .= 'class ' . $this->name . ' implements Model' . PHP_EOL;
        $classString .= '{' . PHP_EOL;

        $indent = "\t";

        $classString .= $indent . 'use FromArray, ToArray;' . PHP_EOL;
        $classString .= PHP_EOL;

        foreach ($this->properties as $property) {
            $classString .= $property->getProperty() . PHP_EOL;
        }

        $classString .= $indent . '/**' . PHP_EOL
            . $indent . ' * @return self' . PHP_EOL
            . $indent . ' */' . PHP_EOL
            . $indent . 'public static function fromArray(array $data): Model' .PHP_EOL
            . $indent . '{' . PHP_EOL
            . $indent . $indent . 'return self::createFromArray($data);' . PHP_EOL
            . $indent . '}' . PHP_EOL;

        foreach ($this->properties as $property) {
            $classString .= $property->getGetter() . PHP_EOL;
        }

        foreach ($this->properties as $property) {
            $classString .= $property->getSetter() . PHP_EOL;
        }

        $classString .= '}' . PHP_EOL;

        return $classString;
    }
}

