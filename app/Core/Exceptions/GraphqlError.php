<?php

namespace App\Core\Exceptions;

use GraphQL\Error\Error;


class GraphqlError extends Error
{
    protected $customData;

    public function __construct($message, $data = [])
    {
        parent::__construct($message);

        $this->customData = $data;
    }

    public function getExtensions(): ?array
    {
        return $this->customData;
    }
}
