<?php

namespace App\Core\Contracts;

interface AuthenticatableContract
{
    public function getAuthIdentifier(): int;

    public function validateCredentials(array $credentials): bool;

    public function login(array $credentials);
}