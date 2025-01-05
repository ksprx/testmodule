<?php

namespace App\Core\Facades;
/**
 * @method static void set(string $key, mixed $value)
 * @method static mixed get(string $key, mixed $default = null)
 */
class Config extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'config';
    }
}