<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Size implements RuleContract
{
    protected int $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        if (is_string($value)) {
            return strlen($value) === $this->size;
        }

        if (is_numeric($value)) {
            return $value == $this->size;
        }

        if (is_array($value)) {
            return count($value) === $this->size;
        }

        return false;
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field must be exactly {$this->size} characters long or have a value of {$this->size}.";
    }
}