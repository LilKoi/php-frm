<?php

require 'application/lib/Dev.php';
require __DIR__ . "/vendor/autoload.php";
use application\core\Router;
session_start();
$router = new Router;
$router->run();