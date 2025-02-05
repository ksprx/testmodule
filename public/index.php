<?php
ini_set("display_errors", 0);

use App\Core\Request\Request;

require_once __DIR__ . '/../vendor/autoload.php';

define('AMADAY_START', microtime(true));
(require_once __DIR__ . '/../app/Core/Bootstrap/app.php')
    ->handleRequest(Request::capture());