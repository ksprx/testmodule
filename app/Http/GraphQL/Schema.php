<?php

use App\Core\Facades\Graphql;

Graphql::query("index", function () {
    return "Amaday GraphQL Ready To Use";
})->type(\GraphQL\Type\Definition\Type::string());