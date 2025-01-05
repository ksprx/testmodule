<?php

namespace App\Core\Cache\Drivers;

use App\Core\Contracts\CacheDriverContract;
use App\Core\Facades\Logger;
use Predis\Client as PredisClient;
use Redis;

class RedisCacheDriver implements CacheDriverContract
{
    protected $redis;

    public function __construct(array $config)
    {
        $this->initRedis($config);
    }

    private function initRedis(array $config)
    {
        try {
            $this->redis = new Redis();
            $this->redis->connect($config['host'], $config['port']);

            if (!empty($config['password'])) {
                $this->redis->auth($config['password']);
            }

            $this->redis->select($config['database']);
        } catch (\Exception $e) {
            Logger::error('Failed to connect to Redis: ' . $e->getMessage());
            throw new \RuntimeException('Failed to connect to Redis: ' . $e->getMessage());
        }
    }

    public function get($key)
    {
        return $this->redis->get($key);
    }

    public function set($key, $value, $ttl = null)
    {
        if ($this->redis instanceof PredisClient && $ttl !== null) {
            return $this->redis->setex($key, $ttl, $value);
        }

        return $this->redis->set($key, $value, $ttl);
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
        return $this->redis->exists($key) > 0;
    }
}
