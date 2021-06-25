<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\CcvGenerator\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\PropertiesWriter;

class ParameterClass
{
    private $namespace;

    private $name;

    private $properties;

    private $sortableFields;

    private $expandableFields;

    private $paginated;

    /**
     * @param Property[] $properties
     * @param string[] $sortableFields
     * @param string[] $expandableFields
     */
    public function __construct(
        string $namespace,
        string $name,
        array $properties = [],
        array $sortableFields = [],
        array $expandableFields = [],
        bool $paginated = false
    ) {
        $this->namespace = $namespace;

        if (in_array(Str::snake($name), Php::RESERVED_KEYWORDS)) {
            $this->name = $name . 'Parameter';
        } else {
            $this->name = $name;
        }

        $this->properties = $properties;
        $this->sortableFields = $sortableFields;
        $this->expandableFields = $expandableFields;
        $this->paginated = $paginated;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function addProperty(Property $property): void
    {
        $this->properties[] = $property;
    }

    public function addSortableField(string $field): void
    {
        $this->sortableFields[] = $field;
    }

    public function addExpandableField(string $field): void
    {
        $this->expandableFields[] = $field;
    }

    public function setPaginated(bool $paginated): void
    {
        $this->paginated = $paginated;
    }

    public function getRelativePath(): string
    {
        return str_replace('JacobDeKeizer\Ccv', '', $this->namespace) . '\\' . $this->name . '.php';
    }

    public function getNamespacedClass(): string
    {
        return '\\' . $this->namespace . '\\' . $this->name;
    }

    public function hasContent(): bool
    {
        return $this->paginated
            || count($this->properties) > 0
            || count($this->expandableFields) > 0
            || count($this->sortableFields) > 0;
    }

    public function toString(): string
    {
        $hasExpandableFields = count($this->expandableFields) > 0;
        $hasSortableFields =  count($this->sortableFields) > 0;

        $content = '<?php' . PHP_EOL
            . PHP_EOL
            . 'declare(strict_types=1);' . PHP_EOL
            . PHP_EOL
            . 'namespace ' . $this->namespace . ';' . PHP_EOL
            . PHP_EOL;

        $content .= 'use JacobDeKeizer\Ccv\Contracts\Parameter;' . PHP_EOL;
        $content .= 'use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;' . PHP_EOL;

        if ($hasExpandableFields) {
            $content .= 'use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;' . PHP_EOL;
        }

        if ($hasSortableFields) {
            $content .= 'use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;' . PHP_EOL;
        }

        if ($this->paginated) {
            $content .= 'use JacobDeKeizer\Ccv\Parameters\PaginatedList;' . PHP_EOL;
        }

        $content .= 'use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;' . PHP_EOL;
        $content .= 'use JacobDeKeizer\Ccv\Traits\FromArray;' . PHP_EOL;
        $content .= PHP_EOL;

        $content .= sprintf(
            'class %s%s implements Parameter' . PHP_EOL,
            $this->name,
            $this->paginated ? ' extends PaginatedList' : ''
        );
        $content .= '{' . PHP_EOL;

        $content .= Php::INDENTATION . 'use FromArray;' . PHP_EOL;

        if ($hasExpandableFields) {
            $content .= Php::INDENTATION . 'use ExpandableFields;' . PHP_EOL;
        }

        if ($hasSortableFields) {
            $content .= Php::INDENTATION . 'use SortableFields;' . PHP_EOL;
        }

        $content .= PHP_EOL;

        $content .= PropertiesWriter::writeProperties($this->properties);

        $content .= Php::INDENTATION . '/**' . PHP_EOL
            . Php::INDENTATION . ' * @return self' . PHP_EOL
            . Php::INDENTATION . ' */' . PHP_EOL
            . Php::INDENTATION . 'public static function fromArray(array $data): self' . PHP_EOL
            . Php::INDENTATION . '{' . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION . 'return self::createFromArray($data);' . PHP_EOL
            . Php::INDENTATION . '}' . PHP_EOL;

        $content .= PHP_EOL;

        $content .= Php::INDENTATION . '/**' . PHP_EOL
            . Php::INDENTATION . ' * @return self' . PHP_EOL
            . Php::INDENTATION . ' */' . PHP_EOL
            . Php::INDENTATION . 'public static function fromUrl(?string $url): ?self' . PHP_EOL
            . Php::INDENTATION . '{' . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION . 'if ($url === null) {' . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION . Php::INDENTATION . 'return null;' . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION . '}' . PHP_EOL
            . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION
                . 'return self::fromArray(QueryParametersArrayFactory::fromUrl($url));' . PHP_EOL
            . Php::INDENTATION . '}' . PHP_EOL;

        $content .= PHP_EOL;

        $content .= Php::INDENTATION . 'public function toBuilder(): QueryParameterBuilder' . PHP_EOL
            . Php::INDENTATION . '{' . PHP_EOL
            . Php::INDENTATION . Php::INDENTATION . 'return (parent::toBuilder())' . PHP_EOL;

        $methodIndentation = Php::INDENTATION . Php::INDENTATION . Php::INDENTATION;

        foreach ($this->properties as $property) {
            $content .= sprintf('%s->addOptionalParameter(\'%s\', $this->%s)%s',
                $methodIndentation,
                $property->getName(),
                $property->getName(),
                PHP_EOL
            );
        }

        if ($hasExpandableFields) {
            $content .= $methodIndentation . '->expandFields($this->getExpandedFields())' . PHP_EOL;
        }

        if ($hasSortableFields) {
            $content .= $methodIndentation . '->orderBy($this->getOrderBy());'  . PHP_EOL;
        }

        $content .= Php::INDENTATION . '}' . PHP_EOL;

        $content .= PropertiesWriter::writeMethods($this->properties, false);

        foreach ($this->expandableFields as $expandableField) {
            $content .= PHP_EOL;
            $content .= sprintf(
                '%spublic function expand%s(bool $expand = true): self%s',
                Php::INDENTATION,
                ucfirst($expandableField),
                PHP_EOL
            );

            $content .= Php::INDENTATION . '{' . PHP_EOL;

            $content .= Php::INDENTATION . Php::INDENTATION . sprintf(
                '$this->expandField(\'%s\', $expand);%s',
                $expandableField,
                PHP_EOL
            );

            $content .= PHP::INDENTATION . PHP::INDENTATION . 'return $this;' . PHP_EOL;

            $content .= Php::INDENTATION . '}' . PHP_EOL;
        }

        foreach ($this->sortableFields as $sortableField) {
            $content .= $this->makeOrderByField($sortableField, true);
            $content .= $this->makeOrderByField($sortableField, false);
        }

        $content .= '}' . PHP_EOL;

        return $content;
    }

    private function makeOrderByField(string $field, bool $ascending): string
    {
        $content = PHP_EOL;
        $content .= sprintf(
            '%spublic function orderBy%s(): self%s',
            Php::INDENTATION,
            ucfirst($field) . ($ascending ? 'Asc' : 'Desc'),
            PHP_EOL
        );

        $content .= Php::INDENTATION . '{' . PHP_EOL;
        $content .= sprintf(
            '%s$this->orderByField(\'%s\', %s);%s',
            Php::INDENTATION . Php::INDENTATION,
            $field,
            $ascending ? 'true' : 'false',
            PHP_EOL
        );
        $content .= Php::INDENTATION . Php::INDENTATION . 'return $this;' . PHP_EOL;
        $content .= Php::INDENTATION . '}' . PHP_EOL;

        return $content;
    }
}
