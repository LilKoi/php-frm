<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Card;
use application\lib\Db;
class MainController extends Controller
{
    protected Card $card;
    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function indexAction()
    {
        $nows = $this->card->orderBy('id', 'desc')->take(4)->get();
        $vars = [
        "nows" => $nows
        ];
        $route = ["main","index"];
        $this->view->render($route, 'Главная страница', $vars);
    }

}