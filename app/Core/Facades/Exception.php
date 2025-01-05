<?php

namespace App\Core\Facades;
/**
 * Class ExceptionHandler
 *
 * @method static void handle(\Throwable $exception)
 */
class Exception extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'exception.handler';
    }
}