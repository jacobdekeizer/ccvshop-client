<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator;

use JacobDeKeizer\CcvGenerator\Classes\EndpointClass;
use JacobDeKeizer\CcvGenerator\Classes\ModelClass;
use JacobDeKeizer\CcvGenerator\Classes\ParameterClass;
use JacobDeKeizer\CcvGenerator\Factories\EndpointClassGenerator;
use JacobDeKeizer\CcvGenerator\Factories\ModelClassFactory;
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
    }

    public function generate(string $url, string $namespacePrefix): void
    {
        $this->createModelClass(ModelClassFactory::make($url, $namespacePrefix));
    }

    private function createModelClass(ModelClass $phpClass): void
    {
        $this->createModelFile($phpClass);

        foreach ($phpClass->getClasses() as $class) {
            $this->createModelClass($class);
        }
    }

    private function createEndpointFile(EndpointClass $endpoint): void
    {
        FileHelper::fileForceContents(
            $this->rootDir,
            'Endpoints/' . $endpoint->getClassName() . '.php',
            $endpoint->toString()
        );
    }

    private function createModelFile(ModelClass $modelClass): void
    {
        FileHelper::fileForceContents(
            $this->rootDir,
            $this->normalizePath($modelClass->getRelativePath()),
            $modelClass->toString()
        );
    }

    private function createParameterFile(ParameterClass $parameterClass): void
    {
        FileHelper::fileForceContents(
            $this->rootDir,
            $this->normalizePath($parameterClass->getRelativePath()),
            $parameterClass->toString()
        );
    }

    private function normalizePath(string $path): string
    {
        return str_replace('\\', '/', $path);
    }

    private function removeOldModels(): void
    {
        $directories = glob($this->rootDir . '/Models/*');

        foreach ($directories as $directory) {
            if (in_array(basename($directory), self::MANUAL_MODELS_DIRS)) {
                continue;
            }

            FileHelper::removeDirectoryWithContents($directory);
        }
    }

    private function removeOldEndpoints(): void
    {
        $directories = glob($this->rootDir . '/Endpoints/*');

        foreach ($directories as $directory) {
            if (in_array(basename($directory), self::MANUAL_ENDPOINTS)) {
                continue;
            }

            FileHelper::removeDirectoryWithContents($directory);
        }
    }

    private function removeOldParameters(): void
    {
        $directories = glob($this->rootDir . '/Parameters/*');

        foreach ($directories as $directory) {
            if (in_array(basename($directory), self::MANUAL_PARAMETERS)) {
                continue;
            }

            FileHelper::removeDirectoryWithContents($directory);
        }
    }
}
