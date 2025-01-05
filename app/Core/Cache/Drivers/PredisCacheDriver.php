<?php

namespace App\Core\Cache\Drivers;

use App\Core\Contracts\CacheDriverContract;
use App\Core\Facades\Logger;
use Predis\Client as PredisClient;

class PredisCacheDriver implements CacheDriverContract
{
    protected $redis;

    public function __construct(array $config)
    {
        $this->initPredis($config);
    }

    private function initPredis(array $config)
    {
        try {
            $this->redis = new PredisClient([
                'scheme' => 'tcp',
                'host' => $config['host'],
                'port' => $config['port'],
                'password' => $config['password'] ?? null,
                'database' => $config['database'] ?? 0,
            ]);
        } catch (\Exception $e) {
            Logger::error('Failed to connect to Predis: ' . $e->getMessage());
            throw new \RuntimeException('Failed to connect to Predis: ' . $e->getMessage());
        }
    }

    public function get($key)
    {
        return $this->redis->get($key);
    }

    public function set($key, $value, $ttl = null)
    {
        if ($ttl) {
            return $this->redis->setex($key, $ttl, $value);
        }
        return $this->redis->set($key, $value);
    }

    public function delete($key)
    {
        return $this->redis->del($key);
    }

    public function clear()
    {
        return $this->redis->flushAll();
    }

    public function has($key)
    {
        return $this->redis->exists($key);
    }
}
