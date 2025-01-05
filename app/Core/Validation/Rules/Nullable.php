<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class Nullable implements RuleContract
{
    public function validate($attribute, $value, $parameters = []): bool
    {
        //TODO
    }

    public function message($attribute, $parameters = []): string
    {
        //TODO
    }
}