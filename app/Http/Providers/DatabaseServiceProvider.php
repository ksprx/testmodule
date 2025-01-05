<?php

namespace App\Http\Providers;

use App\Core\Facades\Config;
use Illuminate\Database\Capsule\Manager as Capsule;

class DatabaseServiceProvider extends ServiceProvider
{
    protected Capsule $capsule;

    public function register(): void
    {
        $this->capsule = new Capsule;
        $connections = Config::get('database.connections');
        $this->capsule->addConnection($this->getDefaultConnection($connections));
        foreach ($connections as $name => $settings) {
            $this->capsule->addConnection($settings, $name);
        }
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
        $this->app->singleton('db', function () {
            return $this->capsule;
        });
    }

    public function boot(): void
    {
    }

    protected function getDefaultConnection($connections)
    {
        $default = Config::get('database.default');
        foreach ($connections as $name => $settings) {
            if ($name == $default)
                return $settings;
        }
        return null;
    }

    public function getCapsule(): Capsule
    {
        return $this->capsule;
    }
}