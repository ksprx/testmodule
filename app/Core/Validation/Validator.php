<?php

namespace App\Validation;

namespace App\Core\Validation;

use App\Core\Request\Request;

class Validator
{
    protected Request $request;
    protected array $errors = [];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function validate(array $rules): bool
    {
        foreach ($rules as $field => $ruleData) {
            if (is_string($ruleData)) {
                $rules = explode('|', $ruleData);

            } elseif (is_array($ruleData)) {
                $rules = $ruleData;
            }
            foreach ($rules as $rule) {
                if (!empty($rule))
                    $this->handleRule($field, $rule);
            }
        }

        return empty($this->errors);
    }

    protected function handleRule(string $field, $rule): void
    {
        $ruleInstance = null;

        if (is_string($rule)) {
            $parts = explode(':', $rule);
            $ruleName = $parts[0];
            $parameters = isset($parts[1]) ? explode(',', $parts[1]) : [];
            $ruleClass = $this->getRuleClass($ruleName);

            $ruleInstance = new $ruleClass(...$parameters);
        } elseif (is_array($rule)) {
            $ruleClass = $rule[0];
            $parameters = $rule[1] ?? [];

            $ruleInstance = new $ruleClass(...$parameters);
        }
        if (!$ruleInstance->validate($field, $this->request->input($field))) {
            $this->errors[$field][] = $ruleInstance->message($field);
        }
    }

    protected function getRuleClass(string $ruleName): string
    {
        $ruleName = ucwords(str_replace('_', '', $ruleName));

        $ruleClass = "App\\Core\\Validation\\Rules\\{$ruleName}";

        if (class_exists($ruleClass)) {
            return $ruleClass;
        }

        throw new \Exception("Rule class {$ruleClass} not found.");
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
