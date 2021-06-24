<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\File;

class FileHelper
{
    public static function fileForceContents(string $rootDir, string $path, string $contents): void
    {
        $parts = explode('/', $path);
        array_pop($parts);
        $dir = $rootDir;

        foreach ($parts as $part) {
            if (!is_dir($dir .= '/' . $part)) {
                mkdir($dir);
            }
        }

        file_put_contents($rootDir . '/' . $path, $contents);
    }

    public static function removeDirectoryWithContents(string $path): void
    {
        if (is_file($path)) {
            unlink($path);
            return;
        }

        $files = glob($path . '/*');

        foreach ($files as $file) {
            self::removeDirectoryWithContents($file);
        }

        rmdir($path);
    }
}