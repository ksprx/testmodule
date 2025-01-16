<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Regex implements RuleContract
{
    protected string $pattern;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        return preg_match($this->pattern, $value) === 1;
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field format is invalid.";
    }
}