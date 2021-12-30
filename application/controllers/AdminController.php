<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Card;

class AdminController extends Controller
{
    protected Card $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function createAction()
    {
        $route = ["cards","create"];
        $this->view->render($route, 'Создать товар');
    }

    public function storeAction()
    {
        $card = new Card($_POST);
        $card->create();
    }
}
