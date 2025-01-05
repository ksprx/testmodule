<?php

namespace App\Http\Providers;

class ConfigServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('config', function () {
            return new \App\Core\Config\Config(CONFIG_PATH);
        });
    }

    public function boot(): void
    {
    }
}