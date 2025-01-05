<?php

namespace App\Core\Config;

class Config
{
    protected array $configurations = [];

    public function __construct($configPath)
    {
        $this->loadConfigurations($configPath);
    }

    /**
     * بارگذاری تمام فایل‌های پیکربندی از مسیر مشخص‌شده
     *
     * @param string $configPath
     */
    protected function loadConfigurations(string $configPath): void
    {
        $files = glob($configPath . '/*.php');

        foreach ($files as $file) {
            $key = basename($file, '.php');
            $this->configurations[$key] = require $file;
        }
    }

    /**
     * دریافت مقدار پیکربندی
     *
     * @param string $key مسیر کلید پیکربندی مانند database.connections.mysql
     * @param mixed|null $default مقدار پیش‌فرض اگر کلید پیدا نشد
     * @return mixed مقدار تنظیم‌شده یا مقدار پیش‌فرض
     */
    public function get(string $key, mixed $default = null): mixed
    {

        $keys = explode('.', $key);
        $value = $this->configurations;

        foreach ($keys as $k) {
            if (!isset($value[$k])) {
                return $default;
            }
            $value = $value[$k];
        }

        return $value;
    }

    /**
     * تنظیم مقدار جدید برای یک کلید پیکربندی در زمان اجرا
     *
     * @param string $key مسیر کلید پیکربندی مانند database.connections.mysql
     * @param mixed $value مقدار جدید برای تنظیم
     */
    public function set(string $key, mixed $value): void
    {
        $keys = explode('.', $key);
        $config =& $this->configurations;

        foreach ($keys as $k) {
            if (!isset($config[$k])) {
                $config[$k] = [];
            }
            $config =& $config[$k];
        }

        $config = $value;
    }
}
