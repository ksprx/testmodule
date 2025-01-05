<?php

namespace App\Core\Contracts;

interface FileDriverContract
{
    public function put(string $path, string $content, array $options = []): bool;

    public function get(string $path): string;

    public function delete(string $path): bool;

    public function exists(string $path): bool;

    public function files(string $directory): array;

    public function makeDirectory(string $directory): bool;

    public function deleteDirectory(string $directory): bool;

    public function temporaryUrl(string $path, int $expiration): string;
}