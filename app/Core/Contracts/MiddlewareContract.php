<?php

namespace App\Core\Contracts;

use App\Core\Request\Request;

interface MiddlewareContract
{
    public function handle(Request $request, callable $next);
}