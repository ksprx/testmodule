<?php

namespace App\Http\Providers;

use App\Core\Contracts\FileManagerContract;
use App\Core\FileSystem\FileManager;

class FileManagerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(FileManagerContract::class, function () {
            return FileManager::getInstance();
        });
    }

    public function boot(): void
    {

    }
}