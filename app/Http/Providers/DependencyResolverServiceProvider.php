<?php

namespace App\Http\Providers;

use App\Http\Services\DependencyResolver;

class DependencyResolverServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(DependencyResolver::class, function () {
            return new DependencyResolver();
        });
    }

    public function boot(): void
    {
    }
}
