<?php

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    function env(string $key, mixed $default = null): mixed
    {
        if (array_key_exists($key, $_ENV)) {
            return $_ENV[$key];
        }
        return $default;
    }
}

if (!function_exists('storage_path')) {
    /**
     * generate storage full path
     *
     * @param string|null $path
     * @return string
     */
    function storage_path(?string $path = ''): string
    {
        $baseStoragePath = STORAGE_PATH;
        if ($path) {
            return $baseStoragePath . DIRECTORY_SEPARATOR . $path;
        }
        return $baseStoragePath;
    }
}

if (!function_exists('public_path')) {
    /**
     * generate storage full path
     *
     * @param string|null $path
     * @return string
     */
    function public_path(?string $path = ''): string
    {
        $baseStoragePath = PUBLIC_PATH;
        if ($path) {
            return $baseStoragePath . DIRECTORY_SEPARATOR . $path;
        }
        return $baseStoragePath;
    }
}

if (!function_exists('config_path')) {
    /**
     * generate storage full path
     *
     * @param string|null $path
     * @return string
     */
    function config_path(?string $path = ''): string
    {
        $baseStoragePath = CONFIG_PATH;
        if ($path) {
            return $baseStoragePath . DIRECTORY_SEPARATOR . $path;
        }
        return $baseStoragePath;
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        $baseUrl = rtrim(getenv('APP_URL') ?: 'http://localhost:8000', '/');
        return $baseUrl . '/' . ltrim($path, '/');
    }
}