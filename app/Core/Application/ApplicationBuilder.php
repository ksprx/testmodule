<?php

namespace App\Core\Application;

class ApplicationBuilder
{
    private Application $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function withKernels()
    {
        $this->app->loadKernels();
        return $this;
    }

    public function create(): Application
    {
        Application::setInstance($this->app);
        $this->app->initialize();
        return $this->app;
    }
}