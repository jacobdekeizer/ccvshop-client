<?php

namespace JacobDeKeizer\Ccv\Generator;

use JacobDeKeizer\Ccv\Generator\Factories\PhpClassFactory;

class SchemaGenerator
{
    /**
     * @var string
     */
    private $rootDir;

    public function __construct()
    {
        $this->rootDir = str_replace('Generator', '', __DIR__);
    }

    public function generate(string $url): void
    {
        $this->createClass(PhpClassFactory::make($url));
    }

    private function createClass(PhpClass $phpClass): void
    {
        $this->createPhpFile($phpClass);

        foreach ($phpClass->getClasses() as $class) {
            $this->createClass($class);
        }
    }

    private function createPhpFile(PhpClass $phpClass): void
    {
        $filePath = $this->rootDir . str_replace('\\', '/', $phpClass->getRelativePath());

        $this->fileForceContents($filePath, $phpClass->toString());
    }

    private function fileForceContents(string $path, string $contents): void
    {
        $parts = explode('/', $path);
        $file = array_pop($parts);
        $dir = '';

        foreach ($parts as $part) {
            if (!is_dir($dir .= '/' . $part)) {
                mkdir($dir);
            }
        }

        file_put_contents($path, $contents);
    }
}

