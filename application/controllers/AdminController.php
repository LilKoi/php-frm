<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Card;
use application\models\Category;
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
        $vars = [
            "categories" => Category::get()
        ];
        $this->view->render($route, 'Создать товар',$vars);
    }

    public function storeAction()
    {   
        $_POST["img"] = $_FILES["img"]["name"];
        foreach($_POST as $index => $parametr) {
            if($parametr == "on") {
                $_POST[$index] = 1;
            }
        }
        move_uploaded_file($_FILES["img"]["tmp_name"],"public/img/cards/".$_FILES["img"]["name"]);
        $card = new Card();
        $card->create($_POST);
        $this->view->redirect("/admin/cards");        
    }

    public function adminAction()
    {
        $vars = [
            "cards" => $this->card->get()
        ];
        $this->view->render(["cards","admin"],"товары",$vars);
    }

    public function deleteAction()
    {
        $this->card->find($_GET["id"])->delete();
        $this->view->redirect("/admin/cards");
    }

    public function editAction()
    {
        $vars = [
            "card" => $this->card->find($_GET["id"]),
            "categories" => Category::get()
        ];
        $this->view->render(["cards","create"],"Изменить карточку " . $vars["card"]["name"], $vars);
    }

    public function updateAction()
    {   
        foreach($_POST as $index => $parametr) {
            if($parametr == "on") {
                $_POST[$index] = 1;
            }
        }
        $card = $this->card->find($_GET["id"]);
        if($_FILES["img"]["name"] != ""){
            $_POST["img"] = $_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"],"public/img/cards/".$_FILES["img"]["name"]);
        }else{
            $_POST["img"] = $card["img"]; 
        }
        $card->update($_POST);
        $this->view->redirect("/admin/cards");
    }
}
