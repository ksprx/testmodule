<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Max implements RuleContract
{
    protected int $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        if (is_string($value)) {
            return strlen($value) >= $this->max;
        }

        if (is_numeric($value)) {
            return $value >= $this->max;
        }

        return false;
    }

    public function message($attribute, $parameters = []): string
    {
        return "$attribute must be no more than {$this->max}.";
    }
}