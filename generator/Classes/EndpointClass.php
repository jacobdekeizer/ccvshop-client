<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\Ccv\Support\Str;

class EndpointClass
{
    private $title;

    /**
     * @var EndpointMethod[]
     */
    private $endpointMethods;

    /**
     * @param EndpointMethod[] $endpointMethods
     */
    public function __construct(string $title, array $endpointMethods = [])
    {
        $this->title = $title;
        $this->endpointMethods = $endpointMethods;
    }

    public function addEndpointMethod(EndpointMethod $endpointMethod): void
    {
        $this->endpointMethods[] = $endpointMethod;
    }

    /**
     * @return EndpointMethod[]
     */
    public function getEndpointMethods(): array
    {
        return $this->endpointMethods;
    }

    public function getClassName(): string
    {
        return Str::studly($this->title . 'Endpoint');
    }

    public function toString(): string
    {
        $content = '<?php' . PHP_EOL
            . PHP_EOL
            . 'declare(strict_types=1);' . PHP_EOL
            . PHP_EOL
            . 'namespace JacobDeKeizer\Ccv\Endpoints;' . PHP_EOL
            . PHP_EOL;

        $content .= 'class ' . $this->getClassName() . ' extends BaseEndpoint' . PHP_EOL;
        $content .= '{' . PHP_EOL;

        $count = count($this->endpointMethods);

        for ($i = 0; $i < $count; $i++) {
            $content .= $this->endpointMethods[$i]->toString();

            if ($i < $count - 1) {
                $content .= PHP_EOL;
            }
        }

        $content .= '}' . PHP_EOL;

        return $content;
    }
}