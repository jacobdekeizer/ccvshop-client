<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

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
        if ($this->isCreateOrUpdate()) {
            $this->writeCreateOrUpdate($codeWriter);
            return;
        }

        if ($this->isDelete()) {
            $this->writeDelete($codeWriter);
            return;
        }

        $this->writeGet($codeWriter);
    }

    private function writeGet(CodeWriter $codeWriter): void
    {
        $this->writeMethod($codeWriter, $this->model->getNamespacedClass());

        $this->writeParameter($codeWriter);

        $codeWriter->writeLine('$result = $this->doRequest(');
        $codeWriter->indent();
        $codeWriter->writeLine('self::' . $this->httpMethod . ',');
        $codeWriter->writeLine($this->getParameterizedUrl());
        $codeWriter->outdent();
        $codeWriter->writeLine(');');

        $codeWriter->insertNewLine();

        $codeWriter->writeLine('return ' . $this->model->getNamespacedClass() . '::fromArray($result);');

        $codeWriter->closeMethod();
    }

    private function writeCreateOrUpdate(CodeWriter $codeWriter): void
    {
        $this->writeMethod($codeWriter, 'void');

        $this->writeParameter($codeWriter);

        $codeWriter->writeLine('$this->doRequest(');
        $codeWriter->indent();
        $codeWriter->writeLine('self::' . $this->httpMethod . ',');
        $codeWriter->writeLine($this->getParameterizedUrl() . ',');
        $codeWriter->writeLine('$model->toArray($onlyFilled)');
        $codeWriter->outdent();
        $codeWriter->writeLine(');');
        $codeWriter->closeMethod();
    }

    private function writeDelete(CodeWriter $codeWriter): void
    {
        $this->writeMethod($codeWriter, 'void');

        $this->writeParameter($codeWriter);

        $codeWriter->writeLine('$this->doRequest(');
        $codeWriter->indent();
        $codeWriter->writeLine('self::' . $this->httpMethod . ',');
        $codeWriter->writeLine($this->getParameterizedUrl() . ',');
        $codeWriter->outdent();
        $codeWriter->writeLine(');');
        $codeWriter->closeMethod();
    }

    private function writeMethod(CodeWriter $codeWriter, string $returnType): void
    {
        $codeWriter->writeMultilineDocblock([
            $this->description,
            '',
            '@throws CcvShopException'
        ]);
        $codeWriter->openMethod(sprintf(
            'public function %s(%s): %s',
            $this->methodName,
            $this->getMethodSignature(),
            $returnType
        ));
    }

    private function writeParameter(CodeWriter $codeWriter): void
    {
        if ($this->parameter === null) {
            return;
        }

        $codeWriter->writeLine('if ($parameter === null) {');
        $codeWriter->indent();
        $codeWriter->writeLine('$parameter = new ' . $this->parameter->getNamespacedClass() . '();');
        $codeWriter->outdent();
        $codeWriter->writeLine('}');

        $codeWriter->insertNewLine();
    }

    private function isCreateOrUpdate(): bool
    {
        return $this->httpMethod === 'PATCH' || $this->httpMethod === 'POST' || $this->httpMethod === 'PUT';
    }

    private function isDelete(): bool
    {
        return $this->httpMethod === 'DELETE';
    }

    private function getPropertiesMethodSignature(): string
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

    private function getMethodSignature(): string
    {
        $content = $this->getPropertiesMethodSignature();

        if ($this->isCreateOrUpdate()) {
            $content .= $this->addSeparator($content);
            $content .= $this->model->getNamespacedClass() . ' $model';
        }

        if ($this->parameter) {
            $content .= $this->addSeparator($content);
            $content .= $this->parameter->getNamespacedClass() . ' $parameter = null';
        }

        if ($this->isCreateOrUpdate()) {
            $content .= $this->addSeparator($content);
            $content .= 'bool $onlyFilled = true';
        }

        return $content;
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

    private function addSeparator(string $content): string
    {
        return $content === '' ? '' : ', ';
    }
}