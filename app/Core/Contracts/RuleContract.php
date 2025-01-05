<?php

namespace App\Core\Contracts;

interface RuleContract
{
    public function validate($attribute, $value, $parameters = []): bool;

    public function message($attribute, $parameters = []): string;
}