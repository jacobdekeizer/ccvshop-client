<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;
use JacobDeKeizer\CcvGenerator\Constants\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;
use JacobDeKeizer\CcvGenerator\Writers\PropertiesWriter;

class ModelClass
{
    private string $namespace;

    private string $name;

    /**
     * @var Property[]
     */
    private array $properties;

    /**
     * @var ModelClass[]
     */
    private array $classes;

    public function __construct(string $namespace, string $name, array $properties = [], array $classes = [])
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

    /**
     * @param Property[] $properties
     */
    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }

    /**
     * @param ModelClass[] $classes
     */
    public function setClasses(array $classes): void
    {
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
     * @return ModelClass[]
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

    public function hasProperty(string $propertyName): bool
    {
        foreach ($this->properties as $property) {
            if ($property->getName() === $propertyName) {
                return true;
            }
        }

        return false;
    }

    public function toString(): string
    {
        $codeWriter = new CodeWriter();

        $codeWriter->startPhpFile($this->namespace);

        $codeWriter->useClass(Model::class);
        $codeWriter->useClass(FromArray::class);
        $codeWriter->useClass(ToArray::class);

        $codeWriter->insertNewLine();

        $codeWriter->openClass('class ' . $this->name . ' implements Model');
        $codeWriter->useClass('FromArray');
        $codeWriter->useClass('ToArray');

        PropertiesWriter::writeProperties($codeWriter, $this->properties);

        $codeWriter->insertNewLine();

        $codeWriter->openMethod('public static function fromArray(array $data): static');
        $codeWriter->writeLine('return static::createFromArray($data);');
        $codeWriter->closeMethod();

        PropertiesWriter::writeMethods($codeWriter, $this->properties);

        $codeWriter->closeClass();

        return $codeWriter->content();
    }
}
