<?php

namespace App\Core\Validation\Rules;

use App\Core\Contracts\RuleContract;
use App\Core\Facades\DB;

class Unique implements RuleContract
{
    protected string $table;
    protected string $column;
    protected ?string $except = null;
    protected string $idColumn;

    public function __construct(string $table, string $column, ?string $except = null, string $idColumn = 'id')
    {
        $this->table = $table;
        $this->column = $column;
        $this->except = $except;
        $this->idColumn = $idColumn;
    }

    public function validate($attribute, $value, $parameters = []): bool
    {
        if ($this->except) {
            return !DB::table($this->table)
                ->where($this->column, $value)
                ->where($this->idColumn, '!=', $this->except)
                ->exists();
        }

        return !DB::table($this->table)
            ->where($this->column, $value)
            ->exists();
    }

    public function message($attribute, $parameters = []): string
    {
        return "{$attribute} must be unique in the {$this->table} table, except for the specified record.";
    }
}
