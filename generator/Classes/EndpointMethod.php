<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\CcvGenerator\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

class EndpointMethod
{
    private $httpMethod;

    private $methodName;

    private $description;

    private $route;

    private $properties;

    private $model;

    private $parameter;

    /**
     * @param Property[] $properties
     */
    public function __construct(
        string $httpMethod,
        string $methodName,
        string $description,
        string $route,
        array $properties,
        ?ModelClass $model = null,
        ?ParameterClass $parameter = null
    ) {
        $this->httpMethod = $httpMethod;
        $this->methodName = $methodName;
        $this->description = $description;
        $this->route = $route;
        $this->properties = $properties;
        $this->model = $model;
        $this->parameter = $parameter;
    }

    public function getModel(): ?ModelClass
    {
        return $this->model;
    }

    public function getParameter(): ?ParameterClass
    {
        return $this->parameter;
    }

    public function write(CodeWriter $codeWriter): void
    {
        $codeWriter->openMethod(sprintf(
            'public function %s(%s): %s',
            $this->methodName,
            $this->getPropertiesSignature() . $this->getParameterSignature(),
            $this->model ? $this->model->getNamespacedClass() : 'void'
        ));

        if ($this->parameter !== null) {
            $codeWriter->writeLine('if ($parameter === null) {');
            $codeWriter->indent();
            $codeWriter->writeLine('$payload = new ' . $this->parameter->getNamespacedClass() . '();');
            $codeWriter->outdent();
            $codeWriter->writeLine('}');

            $codeWriter->insertNewLine();
        }

        $codeWriter->writeLine('$result = $this->doRequest(');
        $codeWriter->indent();
        $codeWriter->writeLine('self::' . $this->httpMethod . ',');
        $codeWriter->writeLine($this->getParameterizedUrl());
        $codeWriter->outdent();
        $codeWriter->writeLine(');');

        if ($this->model) {
            $codeWriter->insertNewLine();
            $codeWriter->writeLine('return ' . $this->model->getNamespacedClass() . '::fromArray($result);');
        }

        $codeWriter->closeMethod();
    }

    private function getPropertiesSignature(): string
    {
        $content = '';

        $count = count($this->properties);

        for ($i = 0; $i < $count; $i++) {
            $content .= $this->properties[$i]->getMethodParameterSignature();

            if ($i < $count - 1) {
                $content .= ', ';
            }
        }

        return $content;
    }

    private function getParameterSignature(): string
    {
        if ($this->parameter === null) {
            return '';
        }

        $content = count($this->properties) > 0 ? ', ' : '';
        return $content . '?' . $this->parameter->getNamespacedClass() . ' $parameter = null';
    }

    private function getParameterizedUrl(): string
    {
        $url = $this->route;

        foreach ($this->properties as $property) {
            $url = str_replace(':' . $property->getName(), '\' . ' . $property->getVariable() . ' . \'', $url);
        }

        $url = '\'' . $url . '\'';

        if ($this->parameter !== null) {
            $url .= ' . $parameter->toBuilder()->toQueryString()';
        }

        return $url;
    }
}