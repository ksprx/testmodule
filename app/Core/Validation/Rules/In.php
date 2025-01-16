<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;

class In implements RuleContract
{
    protected array $allowedValues;

    public function __construct(array $allowedValues)
    {
        $this->allowedValues = $allowedValues;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        return in_array($value, $this->allowedValues);
    }

    public function message($attribute, $parameters = []): string
    {
        $allowedValues = implode(', ', $this->allowedValues);
        return "The {$attribute} field must be one of the following: {$allowedValues}.";
    }
}