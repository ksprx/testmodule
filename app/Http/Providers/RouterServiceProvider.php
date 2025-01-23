<?php

namespace App\Http\Providers;

use App\Core\Application\Application;
use App\Core\Router\Router;
use App\Http\Services\DependencyResolver;

class RouterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Router::class, function () {
            $resolver = Application::getInstance()->resolve(DependencyResolver::class);
            return new Router($resolver);
        });
    }

    public function boot(): void
    {
    }
}