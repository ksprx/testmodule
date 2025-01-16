<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Between implements RuleContract
{
    protected int $min;
    protected int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        if (is_numeric($value)) {
            return $value >= $this->min && $value <= $this->max;
        }

        if (is_string($value)) {
            $length = strlen($value);
            return $length >= $this->min && $length <= $this->max;
        }

        return false;
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field must be between {$this->min} and {$this->max}.";
    }
}