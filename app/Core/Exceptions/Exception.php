<?php

namespace App\Core\Exceptions;

use Exception as BaseException;

class Exception extends BaseException
{
    protected int $statusCode;

    public function __construct($message = "", $code = 0, $statusCode = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->statusCode = $statusCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
