<?php

namespace App\Core\Cache;

use App\Core\Cache\Drivers\FileCacheDriver;
use App\Core\Cache\Drivers\PredisCacheDriver;
use App\Core\Cache\Drivers\RedisCacheDriver;
use App\Core\Contracts\CacheDriverContract;

class CacheManager
{
    protected static ?CacheManager $instance = null;
    protected ?CacheDriverContract $driver = null;


    public function __construct()
    {

    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getDriver(): CacheDriverContract
    {
        if (is_null($this->driver)) {
            $this->initializeDriver();
        }

        return $this->driver;
    }

    public function setDriver(CacheDriverContract $driver)
    {
        $this->driver = $driver;
    }

    public function __call($method, $args)
    {
        $driver = $this->getDriver();

        if (method_exists($driver, $method)) {
            return call_user_func_array([$driver, $method], $args);
        }

        throw new \Exception("Method {$method} does not exist in the cache driver.");
    }

    protected function initializeDriver(): void
    {
        $config = require CONFIG_PATH . '/cache.php';

        $defaultDriver = $config['default'];

        $storeConfig = $config['stores'][$defaultDriver] ?? [];

        $this->driver = match ($defaultDriver) {
            'redis' => $config['stores'][$defaultDriver]['client'] == "predis"
                ? new PredisCacheDriver($storeConfig)
                : new RedisCacheDriver($storeConfig),
            default => new FileCacheDriver($storeConfig),
        };
    }
}