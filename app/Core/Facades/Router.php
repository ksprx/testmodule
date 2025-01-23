<?php

namespace App\Core\Facades;

/**
 * @method static \App\Core\Router\Router get(string $path, callable $callback)
 * @method static \App\Core\Router\Router post(string $path, callable $callback)
 * @method static \App\Core\Router\Router put(string $path, callable $callback)
 * @method static \App\Core\Router\Router delete(string $path, callable $callback)
 * @method static \App\Core\Router\Router group(array $attributes, callable $callback)
 * @method static \App\Core\Router\Router prefix(string $prefix)
 * @method static \App\Core\Router\Router middleware(array $middlewares)
 */
class Router extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \App\Core\Router\Router::class;
    }
}