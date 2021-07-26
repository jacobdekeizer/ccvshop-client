<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\CcvGenerator\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;
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
        $hasSortableFields = count($this->sortableFields) > 0;

        $codeWriter = new CodeWriter();
        $codeWriter->startPhpFile($this->namespace);

        $codeWriter->useClass(Parameter::class);
        $codeWriter->useClass(QueryParametersArrayFactory::class);

        if ($hasExpandableFields) {
            $codeWriter->useClass(ExpandableFields::class);
        }

        if ($hasSortableFields) {
            $codeWriter->useClass(SortableFields::class);
        }

        if ($this->paginated) {
            $codeWriter->useClass(PaginatedList::class);
        }

        $codeWriter->useClass(QueryParameterBuilder::class);
        $codeWriter->useClass(FromArray::class);

        $codeWriter->insertNewLine();

        $codeWriter->openClass(sprintf(
            'class %s%s implements Parameter',
            $this->name,
            $this->paginated ? ' extends PaginatedList' : ''
        ));

        $codeWriter->useClass('FromArray');

        if ($hasExpandableFields) {
            $codeWriter->useClass('ExpandableFields');
        }

        if ($hasSortableFields) {
            $codeWriter->useClass('SortableFields');
        }

        PropertiesWriter::writeProperties($codeWriter, $this->properties);

        $codeWriter->insertNewLine();

        $codeWriter->writeMultilineDocblock(['@return self']);
        $codeWriter->openMethod('public static function fromArray(array $data): Parameter');
        $codeWriter->writeLine('return self::createFromArray($data);');
        $codeWriter->closeMethod();

        $codeWriter->insertNewLine();

        $codeWriter->writeMultilineDocblock(['@return self']);
        $codeWriter->openMethod('public static function fromUrl(?string $url): ?self');
        $codeWriter->writeLine('if ($url === null) {');
        $codeWriter->indent();
        $codeWriter->writeLine('return null;');
        $codeWriter->outdent();
        $codeWriter->writeLine('}');
        $codeWriter->insertNewLine();
        $codeWriter->writeLine('return self::fromArray(QueryParametersArrayFactory::fromUrl($url));');
        $codeWriter->closeMethod();

        $codeWriter->insertNewLine();

        $codeWriter->openMethod('public function toBuilder(): QueryParameterBuilder');
        $codeWriter->writeLine('return (parent::toBuilder())');
        $codeWriter->indent();

        $propertiesCount = count($this->properties);

        for ($i = 0; $i < $propertiesCount; $i++) {
            $codeWriter->writeLine(
                sprintf(
                    '->addOptionalParameter(\'%s\', $this->%s)%s',
                    $this->properties[$i]->getName(),
                    $this->properties[$i]->getName(),
                    $i === $propertiesCount - 1 && !$hasExpandableFields && !$hasSortableFields ? ';' : ''
                )
            );
        }

        if ($hasExpandableFields) {
            $codeWriter->writeLine('->expandFields($this->getExpandedFields())' . ($hasSortableFields ? '' : ';'));
        }

        if ($hasSortableFields) {
            $codeWriter->writeLine('->orderBy($this->getOrderBy());');
        }

        $codeWriter->outdent();
        $codeWriter->closeMethod();

        PropertiesWriter::writeMethods($codeWriter, $this->properties, false);

        foreach ($this->expandableFields as $expandableField) {
            $codeWriter->insertNewLine();

            $codeWriter->openMethod(sprintf(
                'public function expand%s(bool $expand = true): self',
                Str::studly($expandableField),
            ));
            $codeWriter->writeLine(sprintf('$this->expandField(\'%s\', $expand);', $expandableField));
            $codeWriter->writeLine('return $this;');
            $codeWriter->closeMethod();
        }

        foreach ($this->sortableFields as $sortableField) {
            $this->writeOrderByField($codeWriter, $sortableField, true);
            $this->writeOrderByField($codeWriter, $sortableField, false);
        }

        $codeWriter->closeClass();

        return $codeWriter->content();
    }

    private function writeOrderByField(CodeWriter $codeWriter, string $field, bool $ascending): void
    {
        $codeWriter->insertNewLine();
        $codeWriter->openMethod(sprintf(
            'public function orderBy%s(): self',
            Str::studly($field) . ($ascending ? 'Asc' : 'Desc')
        ));
        $codeWriter->writeLine(sprintf(
            '$this->orderByField(\'%s\', %s);',
            $field,
            $ascending ? 'true' : 'false',
        ));
        $codeWriter->writeLine('return $this;');
        $codeWriter->closeMethod();
    }
}
