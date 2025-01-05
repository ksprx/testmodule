<?php

namespace App\Core\Handler;

use App\Core\Facades\Logger;

class ExceptionHandler
{
    public function handle(\Throwable $exception): void
    {
        $statusCode = method_exists($exception, 'getStatusCode') ? $exception->getStatusCode() : 500;
        $eMessage = $exception->getMessage();
        $eFile = $exception->getFile();
        $eLine = $exception->getLine();
        $eTraceAsString = $exception->getTraceAsString();
        $message = sprintf(
            "Exception: %s in %s:%d === Stack trace: %s",
            $eMessage,
            $eFile,
            $eLine,
            $eTraceAsString
        );

        Logger::error($message);

        http_response_code($statusCode);
        echo json_encode([
            'error' => $eMessage,
            'status' => $statusCode,
        ]);
    }
}
