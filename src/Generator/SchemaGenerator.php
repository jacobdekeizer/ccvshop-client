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

    public static function generateAll(): void
    {
        $generator = new self();

        // orders
        $namespace = 'Orders';
        $generator->generate('/API/Schema/vnd.verto.webshop.resource.collection.orders.v1.json', $namespace);
        $generator->generate('/API/Schema/internal.resource.orders.patch.v1.json', $namespace);
        $generator->generate('/API/Schema/internal.resource.orders.post.v1.json', $namespace);

        // orderrows
        $namespace = 'Orderrows';
        $generator->generate('/API/Schema/vnd.verto.webshop.resource.collection.orderrows.v1.json', $namespace);
        $generator->generate('/API/Schema/vnd.verto.webshop.resource.orderrows.v1.json', $namespace);
    }

    public function generate(string $url, string $namespacePrefix): void
    {
        $this->createClass(PhpClassFactory::make($url, $namespacePrefix));
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
        array_pop($parts);
        $dir = '';

        foreach ($parts as $part) {
            if (!is_dir($dir .= '/' . $part)) {
                mkdir($dir);
            }
        }

        file_put_contents($path, $contents);
    }
}
