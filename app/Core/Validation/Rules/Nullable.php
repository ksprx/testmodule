<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Nullable implements RuleContract
{
    public function validate($attribute, $value, $parameters = []): bool
    {
        if (is_null($value) || $value === '') {
            return true;
        }

        if (is_array($value) && empty($value)) {
            return true;
        }

        if (is_object($value) && empty(get_object_vars($value))) {
            return true;
        }

        return true;
    }

    public function message($attribute, $parameters = []): string
    {
        return "The {$attribute} field is optional and can be null or empty.";
    }
}