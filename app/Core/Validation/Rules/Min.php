<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Min implements RuleContract
{
    protected int $min;

    public function __construct(int $min)
    {
        $this->min = $min;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        if (is_string($value)) {
            return strlen($value) >= $this->min;
        }

        if (is_numeric($value)) {
            return $value >= $this->min;
        }

        return false;
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field must be at least {$this->min} characters long or greater than or equal to {$this->min}.";
    }
}