<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Numeric implements RuleContract
{
    public function validate($attribute, $value, $parameters = []): bool
    {
        return is_numeric($value);
    }

    public function message($attribute, $parameters = []): string
    {
        return "$attribute must be numeric.";
    }
}