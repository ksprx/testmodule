<?php

namespace App\Core\Cache\Drivers;

use App\Core\Contracts\CacheDriverContract;

class FileCacheDriver implements CacheDriverContract
{
    protected mixed $cachePath;

    public function __construct(array $config)
    {
        $this->cachePath = $config['path'];

        if (!is_dir($this->cachePath)) {
            mkdir($this->cachePath, 0777, true);
        }
    }

    public function get($key)
    {
        $file = $this->cachePath . '/' . md5($key) . '.cache';
        if (file_exists($file)) {
            return unserialize(file_get_contents($file));
        }
        return null;
    }

    public function set($key, $value, $ttl = null)
    {
        $file = $this->cachePath . '/' . md5($key) . '.cache';
        file_put_contents($file, serialize($value));
    }

    public function delete($key)
    {
        $file = $this->cachePath . '/' . md5($key) . '.cache';
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public function clear()
    {
        $files = glob($this->cachePath . '/*.cache');
        foreach ($files as $file) {
            unlink($file);
        }
    }

    public function has($key)
    {
        $file = $this->cachePath . '/' . md5($key) . '.cache';
        return file_exists($file);
    }
}