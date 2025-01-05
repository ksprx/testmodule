<?php

namespace App\Core\FileSystem\Drivers;


namespace App\Core\FileSystem\Drivers;

use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemOperator;
use League\Flysystem\Local\LocalFilesystemAdapter;

class LocalDriver implements FileDriverContract
{
    protected FilesystemOperator $filesystem;

    public function __construct(string $root)
    {
        $adapter = new LocalFilesystemAdapter($root);
        $this->filesystem = new Filesystem($adapter);
    }

    public function put(string $path, string $content, $options = []): bool
    {
        try {
            $this->filesystem->write($path, $content, $options);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function get(string $path): string
    {
        try {
            return $this->filesystem->read($path);
        } catch (\Exception $e) {
            throw new \Exception("File not found: $path");
        }
    }

    public function delete(string $path): bool
    {
        try {
            $this->filesystem->delete($path);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function exists(string $path): bool
    {
        return $this->filesystem->fileExists($path);
    }

    public function files(string $directory): array
    {
        return $this->filesystem->listContents($directory)->toArray();
    }

    public function makeDirectory(string $directory): bool
    {
        try {
            $this->filesystem->createDirectory($directory);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteDirectory(string $directory): bool
    {
        try {
            $this->filesystem->deleteDirectory($directory);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function temporaryUrl(string $path, int $expiration): string
    {
        return 'temporary-url-generation-not-supported-for-local';
    }
}

