<?php

namespace App\Http\Providers;

use App\Core\Application\Application;

abstract class ServiceProvider
{
    protected Application $app;

    /**
     * ServiceProvider constructor
     */
    public function __construct()
    {
        $this->app = Application::getInstance();
    }

    abstract public function register();

    public function boot()
    {
    }
}
