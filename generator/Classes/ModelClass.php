<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\CcvGenerator\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\PropertiesWriter;

class ModelClass
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
     * @var ModelClass[]
     */
    private $classes;

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

    public function hasProperty(string $property): bool
    {
        foreach ($this->properties as $property) {
            if ($property->getName() === $property) {
                return true;
            }
        }

        return false;
    }

    public function toString(): string
    {
        $content = '<?php' . PHP_EOL
            . PHP_EOL
            . 'declare(strict_types=1);' . PHP_EOL
            . PHP_EOL
            . 'namespace ' . $this->namespace . ';' . PHP_EOL
            . PHP_EOL
            . 'use JacobDeKeizer\Ccv\Contracts\Model;' . PHP_EOL;

        $content .= 'use JacobDeKeizer\Ccv\Traits\FromArray;' . PHP_EOL;
        $content .= 'use JacobDeKeizer\Ccv\Traits\ToArray;' . PHP_EOL;
        $content .= PHP_EOL;

        $content .= 'class ' . $this->name . ' implements Model' . PHP_EOL;
        $content .= '{' . PHP_EOL;

        $content .= Php::INDENTATION . 'use FromArray, ToArray;' . PHP_EOL;
        $content .= PHP_EOL;

        $content .= PropertiesWriter::writeProperties($this->properties);

        $content .= Php::INDENTATION . '/**' . PHP_EOL
            . Php::INDENTATION . ' * @return self' . PHP_EOL
            . Php::INDENTATION . ' */' . PHP_EOL
            . Php::INDENTATION . 'public static function fromArray(array $data): Model' . PHP_EOL
            . Php::INDENTATION . '{' . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION . 'return self::createFromArray($data);' . PHP_EOL
            . Php::INDENTATION . '}' . PHP_EOL;

        $content .= PropertiesWriter::writeMethods($this->properties);

        $content .= '}' . PHP_EOL;

        return $content;
    }
}
