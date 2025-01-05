<?php

namespace App\Core\Facades;
/**
 * Class Logger
 *
 * @method static void log(string $message, string $level = 'info')
 * @method static void info(string $message)
 * @method static void error(string $message)
 * @method static void warning(string $message)
 * @method static void debug(string $message)
 */
class Logger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'logger';
    }
}