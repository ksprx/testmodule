<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Required implements RuleContract
{
    public function validate($attribute, $value, $parameters = []): bool
    {
        return !is_null($value) && $value !== '';
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field is required.";
    }
}