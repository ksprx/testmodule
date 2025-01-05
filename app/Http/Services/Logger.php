<?php

namespace App\Http\Services;

class Logger
{
    protected string $logFile;

    public function __construct()
    {
        $this->logFile = AMADAY_PATH . '/storage/logs/app.log';
        if (!file_exists($this->logFile)) {
            file_put_contents($this->logFile, '');
        }
    }

    public function log(string $message, string $level = 'info'): void
    {
        $formattedMessage = $this->formatMessage($message, $level);
        file_put_contents($this->logFile, $formattedMessage, FILE_APPEND);
    }

    protected function formatMessage(string $message, string $level): string
    {
        return sprintf(
            "[%s] %s: %s\n",
            strtoupper($level),
            date('Y-m-d H:i:s'),
            $message
        );
    }

    public function info(string $message): void
    {
        $this->log($message, 'info');
    }

    public function error(string $message): void
    {
        $this->log($message, 'error');
    }

    public function warning(string $message): void
    {
        $this->log($message, 'warning');
    }

    public function debug(string $message): void
    {
        $this->log($message, 'debug');
    }
}