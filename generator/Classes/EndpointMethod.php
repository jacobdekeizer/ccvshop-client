<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\CcvGenerator\Php;
use JacobDeKeizer\CcvGenerator\Properties\Property;

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

    public function toString(): string
    {
        $content = sprintf(
            '%spublic function %s(%s): %s%s',
            Php::INDENTATION,
            $this->methodName,
            $this->getPropertiesSignature() . $this->getParameterSignature(),
            $this->model ? $this->model->getNamespacedClass() : 'void',
            PHP_EOL
        );

        $content .= Php::INDENTATION . '{' . PHP_EOL;

        $curIndent = Php::INDENTATION . Php::INDENTATION;

        if ($this->parameter !== null) {
            $content .= $curIndent . 'if ($parameter === null) {' . PHP_EOL;
            $content .= $curIndent . Php::INDENTATION
                . '$payload = new ' . $this->parameter->getNamespacedClass() . '();' . PHP_EOL;
            $content .= $curIndent . '}' . PHP_EOL;
            $content .= PHP_EOL;
        }

        $content .= $curIndent . '$result = $this->doRequest(' . PHP_EOL;
        $content .= $curIndent . Php::INDENTATION . 'self::' . $this->httpMethod . ',' . PHP_EOL;
        $content .= $curIndent . Php::INDENTATION . $this->getParameterizedUrl() . PHP_EOL;
        $content .= $curIndent  . ');' . PHP_EOL;

        if ($this->model) {
            $content .= PHP_EOL;
            $content .= $curIndent . 'return ' . $this->model->getNamespacedClass() . '::fromArray($result);' . PHP_EOL;
        }

        $content .= Php::INDENTATION . '}' . PHP_EOL;

        return $content;
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