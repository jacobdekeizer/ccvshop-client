<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\CcvGenerator\Properties\Property;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

class EndpointMethod
{
    private string $httpMethod;

    private string $methodName;

    private string $description;

    private string $route;

    private array $properties;

    private EndpointClass $parent;

    private ?ModelClass $model;

    private ?ParameterClass $parameter;

    /**
     * @param Property[] $properties
     */
    public function __construct(
        string $httpMethod,
        string $methodName,
        string $description,
        string $route,
        array $properties,
        EndpointClass $parent,
        ?ModelClass $model = null,
        ?ParameterClass $parameter = null
    ) {
        $this->httpMethod = $httpMethod;
        $this->methodName = $methodName;
        $this->description = $description;
        $this->route = $route;
        $this->properties = $properties;
        $this->parent = $parent;
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
        if ($this->isUpdate()) {
            $this->writeUpdate($codeWriter);
            return;
        }

        if ($this->isCreate()) {
            $this->writeCreate($codeWriter);
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

    private function writeCreate(CodeWriter $codeWriter): void
    {
        $returnModel = $this->findReturnModelClassOfCreateMethod();

        if ($returnModel === null) {
            $this->writeUpdate($codeWriter);
            return;
        }

        $this->writeMethod($codeWriter, $returnModel);

        $this->writeParameter($codeWriter);

        $codeWriter->writeLine('$result = $this->doRequest(');
        $codeWriter->indent();
        $codeWriter->writeLine('self::' . $this->httpMethod . ',');
        $codeWriter->writeLine($this->getParameterizedUrl() . ',');
        $codeWriter->writeLine('$model->toArray($onlyFilled)');
        $codeWriter->outdent();
        $codeWriter->writeLine(');');

        $codeWriter->insertNewLine();

        $codeWriter->writeLine('return ' . $returnModel . '::fromArray($result);');

        $codeWriter->closeMethod();
    }

    private function writeUpdate(CodeWriter $codeWriter): void
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
        return $this->isCreate() || $this->isUpdate();
    }

    private function isCreate(): bool
    {
        return $this->httpMethod === 'POST';
    }

    private function isUpdate(): bool
    {
        return $this->httpMethod === 'PATCH' || $this->httpMethod === 'PUT';
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

    private function findReturnModelClassOfCreateMethod(): ?string
    {
        $methodName = 'get';

        foreach ($this->parent->getEndpointMethods() as $endpointMethod) {
            if ($endpointMethod->methodName === $methodName) {
                return $endpointMethod->getModel()->getNamespacedClass();
            }
        }

        if ($this->model === null) {
            return null;
        }

        // try fallback e.g.
        // \JacobDeKeizer\Ccv\Models\Languages\Languages\Post -> \JacobDeKeizer\Ccv\Models\Languages\Resource\Languages
        $namespaceParts = explode('\\', $this->model->getNamespacedClass());

        $count = count($namespaceParts);

        $resourceName = $namespaceParts[$count - 2];

        $namespaceParts[$count - 2] = 'Resource';
        $namespaceParts[$count - 1] = $resourceName;

        return implode('\\', $namespaceParts);
    }
}
