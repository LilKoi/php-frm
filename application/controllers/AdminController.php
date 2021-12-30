<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Card;

class AdminController extends Controller
{
    public function createAction()
    {
        $route = ["cards","create"];
        $this->view->render($route,'Создать товар');
    }

    public function storeAction()
    {
        $card = new Card();
        $card->fill($_POST);
        $card->create();
    }
}