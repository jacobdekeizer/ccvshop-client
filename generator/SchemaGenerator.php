<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator;

use JacobDeKeizer\CcvGenerator\Classes\EndpointClass;
use JacobDeKeizer\CcvGenerator\Classes\ModelClass;
use JacobDeKeizer\CcvGenerator\Classes\ParameterClass;
use JacobDeKeizer\CcvGenerator\Factories\EndpointClassGenerator;
use JacobDeKeizer\CcvGenerator\File\FileHelper;

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

//            if ($endpoint->getTitle() === 'Productqueries') {
//                var_dump($endpoint);
//                die();
//            }

            foreach ($endpoint->getEndpointMethods() as $endpointMethod) {
                if ($model = $endpointMethod->getModel()) {
                    $generator->createModelFile($model);
                }

                if ($parameter = $endpointMethod->getParameter()) {
                    $generator->createParameterFile($parameter);
                }
            }
        }
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
