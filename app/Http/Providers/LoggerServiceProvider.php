<?php

namespace App\Http\Providers;

class LoggerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('logger', function () {
            return new \App\Http\Services\Logger();
        });
    }

    public function boot(): void
    {
    }
}