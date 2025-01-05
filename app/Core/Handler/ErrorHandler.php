<?php

namespace App\Core\Handler;

use App\Core\Exceptions\Exception;
use App\Core\Facades\Exception as ExceptionHandler;

class ErrorHandler
{
    public function handle($errno, $errStr, $errFile, $errLine): void
    {
        $errorMessage = sprintf(
            "Error: [%d] %s in %s:%d",
            $errno,
            $errStr,
            $errFile,
            $errLine
        );

        ExceptionHandler::handle(new Exception($errorMessage, $errno, 500));
    }
}