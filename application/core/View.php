<?php

namespace application\core;

class View
{

    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($route,$title, $vars = [])
    {
        extract($vars);
        ob_start();
        $content = ob_get_clean();
        include 'application/views/'. $route[0] .'/'.$route[1].'.php';
    }

    public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'application/views/errors/'.$code.'.php';
        if (file_exists($path)) {
            include $path;
        }
        exit;
    }

    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }

}    