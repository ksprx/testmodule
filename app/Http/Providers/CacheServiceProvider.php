<?php

namespace App\Http\Providers;

use App\Core\Cache\CacheManager;

class CacheServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('cache', function () {
            return CacheManager::getInstance();
        });
    }

    public function boot(): void
    {
    }
}