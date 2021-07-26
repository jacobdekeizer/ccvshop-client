<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator;

use JacobDeKeizer\CcvGenerator\Classes\EndpointClass;
use JacobDeKeizer\CcvGenerator\Classes\ModelClass;
use JacobDeKeizer\CcvGenerator\Classes\ParameterClass;
use JacobDeKeizer\CcvGenerator\Factories\EndpointClassGenerator;
use JacobDeKeizer\CcvGenerator\File\FileHelper;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

class SchemaGenerator
{
    public const MANUAL_MODELS_DIRS = [
        'Root'
    ];

    public const MANUAL_ENDPOINTS = [
        'BaseEndpoint.php',
        'RootEndpoint.php',
    ];

    public const MANUAL_PARAMETERS = [
        'Concerns',
        'PaginatedList.php',
    ];

    /**
     * @var string
     */
    private $rootDir;

    /**
     * @var array<string, bool>
     */
    private $writtenPaths = [];

    public function __construct()
    {
        $this->rootDir = $this->normalizePath(str_replace('generator', 'src', __DIR__));
    }

    public static function generateAll(): void
    {
        $generator = new self();

        $generator->removeOldModels();
        $generator->removeOldEndpoints();
        $generator->removeOldParameters();

        $endpoints = EndpointClassGenerator::make("https://demo.ccvshop.nl/API/Docs/");

        foreach ($endpoints as $endpoint) {
            $generator->createEndpointFile($endpoint);

            foreach ($endpoint->getEndpointMethods() as $endpointMethod) {
                if ($model = $endpointMethod->getModel()) {
                    $generator->createModelFile($model);
                }

                if ($parameter = $endpointMethod->getParameter()) {
                    $generator->createParameterFile($parameter);
                }
            }
        }

        $generator->createClientFile($endpoints);
    }

    private function createEndpointFile(EndpointClass $endpoint): void
    {
        $path = 'Endpoints/' . $endpoint->getClassName() . '.php';

        echo 'Write endpoint ' . $path . PHP_EOL;

        $this->writeFileContentsWithCacheCheck($path, $endpoint->toString());
    }

    private function createModelFile(ModelClass $modelClass): void
    {
        $path = $this->normalizePath($modelClass->getRelativePath());

        echo 'Write model ' . $path . PHP_EOL;

        $newFile = $this->writeFileContentsWithCacheCheck($path, $modelClass->toString());

        if (!$newFile) {
            return;
        }

        foreach ($modelClass->getClasses() as $class) {
            $this->createModelFile($class);
        }
    }

    private function createParameterFile(ParameterClass $parameterClass): void
    {
        $path = $this->normalizePath($parameterClass->getRelativePath());

        echo 'Write parameter ' . $path . PHP_EOL;

        $this->writeFileContentsWithCacheCheck($path, $parameterClass->toString());
    }

    /**
     * @var EndpointClass[] $endpoints
     */
    private function createClientFile(array $endpoints): void
    {
        $codeWriter = new CodeWriter();
        $codeWriter->indent();

        foreach ($endpoints as $endpoint) {
            $methodName = lcfirst(str_replace('Endpoint', '', $endpoint->getClassName()));
            $namespacedClass = 'Endpoints\\' . $endpoint->getClassName();

            $codeWriter->insertNewLine();
            $codeWriter->openMethod(
                sprintf('public function %s(): %s', $methodName, $namespacedClass)
            );
            $codeWriter->writeLine(sprintf('return new %s($this);', $namespacedClass));
            $codeWriter->closeMethod();
        }

        $contents = file_get_contents(__DIR__ . './stubs/Client.php.stub');
        $contents = str_replace('{{ ENDPOINT_METHODS_HERE }}', $codeWriter->content(), $contents);

        FileHelper::fileForceContents(
            $this->rootDir,
            'Client.php',
            $contents
        );
    }

    private function writeFileContentsWithCacheCheck(string $path, string $contents): bool
    {
        if ($this->writtenPaths[$path] ?? false) {
            return false;
        }

        $this->writtenPaths[$path] = true;

        FileHelper::fileForceContents(
            $this->rootDir,
            $path,
            $contents
        );

        return true;
    }

    private function normalizePath(string $path): string
    {
        return str_replace('\\', '/', $path);
    }

    private function removeOldModels(): void
    {
        FileHelper::removeDirectoryWithContentsGlob($this->rootDir . '/Models/*', self::MANUAL_MODELS_DIRS);
    }

    private function removeOldEndpoints(): void
    {
        FileHelper::removeDirectoryWithContentsGlob($this->rootDir . '/Endpoints/*', self::MANUAL_ENDPOINTS);
    }

    private function removeOldParameters(): void
    {
        FileHelper::removeDirectoryWithContentsGlob($this->rootDir . '/Parameters/*', self::MANUAL_PARAMETERS);
    }
}
