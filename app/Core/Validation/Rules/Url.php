<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Url implements RuleContract
{
    public function validate($attribute, $value, $parameters = []): bool
    {
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field must be a valid URL.";
    }
}