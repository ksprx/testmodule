<?php

namespace App\Core\Facades;

use App\Core\Application\Application;
use Exception;

abstract class Facade
{
    /**
     * @throws \App\Core\Facades\Exception|Exception
     */
    protected static function resolveFacadeInstance()
    {
        $instance = static::getFacadeAccessor();

        return Application::getInstance()->resolve($instance);
    }

    abstract protected static function getFacadeAccessor(): string;

    /**
     * @throws \App\Core\Facades\Exception
     * @throws Exception
     */
    public static function __callStatic($method, $args)
    {
        $instance = static::resolveFacadeInstance();

        if (!$instance) {
            throw new Exception("Service not resolved in Facade.");
        }
        return $instance->$method(...$args);
    }
}
