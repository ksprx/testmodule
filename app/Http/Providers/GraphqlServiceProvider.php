<?php

namespace App\Http\Providers;

use App\Core\GraphQL\Graphql;

class GraphqlServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Graphql::class, function () {
            return new Graphql();
        });
    }

    public function boot(): void
    {
    }
}