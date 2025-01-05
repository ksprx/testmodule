<?php

namespace App\Http\Providers;

use App\Core\Handler\ExceptionHandler;

class ExceptionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('exception.handler', function () {
            return new ExceptionHandler();
        });
    }

    public function boot(): void
    {
    }
}