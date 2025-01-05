<?php

namespace App\Core\Facades;


/**
 * @method static mixed get(string $key)
 * @method static bool set(string $key, mixed $value, int|null $ttl = null)
 * @method static bool delete(string $key)
 * @method static bool has(string $key)
 * @method static void clear()
 */
class Cache extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'cache';
    }
}