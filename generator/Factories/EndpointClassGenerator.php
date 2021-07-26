<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Factories;

use Doctrine\Inflector\CachedWordInflector;
use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\Rules\English;
use Doctrine\Inflector\RulesetInflector;
use Exception;
use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Classes\EndpointClass;
use JacobDeKeizer\CcvGenerator\Classes\EndpointMethod;
use JacobDeKeizer\CcvGenerator\Classes\ParameterClass;
use JacobDeKeizer\CcvGenerator\Properties\IntegerProperty;
use JacobDeKeizer\CcvGenerator\Properties\Property;
use Symfony\Component\DomCrawler\Crawler;

class EndpointClassGenerator
{
    /**
     * @return EndpointClass[]
     * @throws Exception
     */
    public static function make(string $url): array
    {
        $endpoints = [];

        $crawler = new Crawler(file_get_contents($url));

        $resources = $crawler->filter('#Resources')->first();

        foreach ($resources->children() as $resource) {
            $resourceId = $resource->attributes->getNamedItem('id')->nodeValue;

            if ($resourceId === 'Resource_root') {
                continue;
            }

            $resourceCrawler = $resources->filter('#' . $resourceId)->first();

            $title = $resourceCrawler->filter('.heading h3')->first()->text();

            echo 'Gathering info for endpoint: ' . $title . PHP_EOL;

            $endpoint = new EndpointClass(Str::studly($title));

            $operations = $resourceCrawler->filter('.operations')->first();

            foreach ($operations->children() as $operation) {
                $endpointId = $operation->attributes->getNamedItem('id')->nodeValue;

                $endpointCrawler = $resourceCrawler->filter('#' . $endpointId)->first();

                $httpMethod = strtoupper($endpointCrawler->filter('.http_method')->text());

                if ($httpMethod === 'OPTIONS') {
                    continue;
                }

                $path = self::removeVersionFromPath($endpointCrawler->filter('.path')->text());

                $description = '';
                $rateLimit = '';
                $contentType = null;

                $endpointCrawler->filter('ul')->first()->filter('li')->each(
                    function (Crawler $descriptionCrawler) use (&$description, &$rateLimit, &$contentType) {
                        $descriptionTitle = $descriptionCrawler->filter('span')->text();
                        $descriptionValue = str_replace($descriptionTitle . ' ', '', $descriptionCrawler->text());

                        if ($descriptionTitle === 'Description:') {
                            $description = $descriptionValue;
                        } else if ($descriptionTitle === 'Rate limit:') {
                            $rateLimit = $descriptionValue;
                        } else if ($descriptionTitle === 'Content-Type:') {
                            $contentType = $descriptionCrawler->filter('a')->attr('href');
                        }
                    }
                );

                $properties = self::extractVariablesFromPath($path);

                $methodName = self::getMethodNameFromPath($httpMethod, $path, $title, $properties);

                $parameter = new ParameterClass(
                    'JacobDeKeizer\Ccv\Parameters\\' . $endpoint->getTitle(),
                    ucfirst($methodName)
                );

                $currentHeader = null;

                $endpointCrawler->filter('.content')->first()->children()->each(
                    function (Crawler $contentChild) use (&$currentHeader, &$parameter) {
                        if ($contentChild->nodeName() === 'h4') {
                            $currentHeader = $contentChild->text();
                            return;
                        }

                        if ($contentChild->nodeName() === 'table' && $currentHeader !== null) {
                            $tbody = $contentChild->children()->first();

                            if ($tbody === null) {
                                $currentHeader = null;
                                return;
                            }

                            $tbody->children()->each(function (Crawler $tr) use (&$currentHeader, &$parameter) {
                                switch ($currentHeader) {
                                    case 'Parameters':
                                        self::handleParameter(
                                            $parameter,
                                            trim($tr->children()->getNode(0)->textContent),
                                            trim($tr->children()->getNode(1)->textContent)
                                        );
                                        break;
                                    case 'Orderby Fields':
                                        $parameter->addSortableField(
                                            trim($tr->children()->getNode(0)->textContent)
                                        );
                                        break;
                                    case 'Expandable Fields':
                                        $parameter->addExpandableField(
                                            trim($tr->children()->getNode(0)->textContent)
                                        );
                                        break;
                                }
                            });
                        }

                        $currentHeader = null;
                    }
                );

                $modelClass = $contentType ? ModelClassFactory::make($contentType, $endpoint->getTitle()) : null;

                $parameter->setPaginated($modelClass && $modelClass->hasProperty('next'));

                $endpoint->addEndpointMethod(new EndpointMethod(
                    $httpMethod,
                    $methodName,
                    $description . ' ' . $rateLimit,
                    $path,
                    $properties,
                    $endpoint,
                    $modelClass,
                    $parameter->hasContent() ? $parameter : null
                ));
            }

            $endpoints[] = $endpoint;
        }

        return $endpoints;
    }

    /**
     * @param Property[] $properties
     * @throws Exception
     */
    private static function getMethodNameFromPath(string $httpMethod, string $path, string $title, array $properties): string
    {
        if ($httpMethod === 'GET' && count($properties) === 0) {
            return 'all';
        }

        $parts = explode('/', $path);

        $origin = $parts[0];

        $isSingular = count($parts) <= 3;

        $fromName = self::getInflector()->singularize(Str::studly($origin));

        $suffix = $isSingular ? '' : 'From' . $fromName;

        if ($httpMethod === 'GET') {
            if ($isSingular) {
                return 'get' . $suffix;
            }

            return 'all' . $suffix;
        }

        $suffix = $isSingular ? '' : 'For' . $fromName;
        
        if ($httpMethod === 'DELETE') {
            return 'delete' . $suffix;
        }

        if ($httpMethod === 'PATCH' || $httpMethod === 'PUT') {
            return 'update' . $suffix;
        }

        if ($httpMethod === 'POST') {
            return 'create' . $suffix;
        }

        throw new Exception(sprintf('Unsupported http method: %s for path: %s', $httpMethod, $path));
    }

    /**
     * @return Property[]
     */
    private static function extractVariablesFromPath(string $path): array
    {
        $parts = explode('/', $path);

        $properties = [];

        for ($i = 0; $i < count($parts); $i++) {
            if (Str::startsWith($parts[$i], ':') === false) {
                continue;
            }

            $name = str_replace(':', '', $parts[$i]);

            $properties[] = new IntegerProperty(
                false,
                $name,
                sprintf('The %s %s', $parts[$i - 1] ?? '', $name),
                true
            );
        }

        return $properties;
    }

    private static function removeVersionFromPath(string $path): string
    {
        return str_replace('/:version/', '', $path);
    }

    private static function handleParameter(ParameterClass $parameterClass, string $title, string $value)
    {
        $pos = strpos($value, ')');

        $type = substr($value, 1, $pos - 1);

        $description = str_replace('(' . $type . ')', '', $value);

        $parameterClass->addProperty(PropertyFactory::make($title, [
            'required' => false,
            'description' => trim($description),
            'type' => $type . '|null',
        ]));
    }

    private static function getInflector(): Inflector
    {
        return new Inflector(
            new CachedWordInflector(new RulesetInflector(
                English\Rules::getSingularRuleset()
            )),
            new CachedWordInflector(new RulesetInflector(
                English\Rules::getPluralRuleset()
            ))
        );
    }
}