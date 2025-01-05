<?php

namespace App\Core\Middleware;

class MiddlewareHandler
{
    protected array $middlewares = [];

    public function add($middleware): void
    {
        $this->middlewares[] = $middleware;
    }

    public function handle($request): void
    {
        foreach ($this->middlewares as $middleware) {
            $middleware->handle($request);
        }
    }
}
