<?php

namespace application\lib;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;

class Db
{

    public static function initializeConnection(): void
    {
        $config = include 'application/config/db.php';
        $capsule = new Capsule();
        $capsule->addConnection(
            [
            'driver' => 'mysql',
            'port' => '3306',
            'host' => $config["host"],
            'database' => $config["name"],
            'username' => $config["user"],
            'password' => $config["password"],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            ]
        );
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
