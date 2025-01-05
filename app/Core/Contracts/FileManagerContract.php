<?php

namespace App\Core\Contracts;

interface FileManagerContract
{
    public function validateFile($file): bool;

    public function upload($file, string $path): string;

    public function delete(string $path): bool;

    public function getUrl(string $path): string;

    public function createDirectory(string $directory): bool;

    public function deleteDirectory(string $directory): bool;

    public function listFiles(string $directory): \League\Flysystem\DirectoryListing;

    public function fileExists(string $path): bool;
}