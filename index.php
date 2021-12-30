<?php

require 'application/lib/Dev.php';
require __DIR__ . "/vendor/autoload.php";

use application\core\Router;
use application\lib\Db;

Db::initializeConnection();

session_start();
$router = new Router;

$router->run();
