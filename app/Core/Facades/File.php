<?php

namespace App\Core\Facades;

use App\Core\Contracts\FileManagerContract;

/**
 * @method static bool validateFile(mixed $file)
 * @method static string upload(mixed $file, string $path)
 * @method static bool delete(string $path)
 * @method static string getUrl(string $path)
 * @method static bool createDirectory(string $directory)
 * @method static bool deleteDirectory(string $directory)
 * @method static \League\Flysystem\DirectoryListing listFiles(string $directory)
 * @method static bool fileExists(string $path)
 */
class File extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return FileManagerContract::class;
    }
}