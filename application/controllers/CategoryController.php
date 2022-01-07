<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Card;
use application\models\Category;
class CategoryController extends Controller
{
    protected Category $model;
    protected Card $card; 
    public function __construct(Category $category, Card $card)
    {
        $this->model = $category;
        $this->card = $card;
    }

    public function indexAction()
    {
        $items = $this->card->with("Cards");
        if(isset($_GET["sort"])) {
            $items = $items->cards->sortBy("price");
        }
        if(!isset($_GET["id"])) {
            $this->view->errorCode(403);
        }

        $vars = [
            "items" => $items,
            "category" => $this->model->find($_GET["id"])
            // "category" => $this->model->find($_GET["id"])->select("name")
        ];
        $this->view->render(["category","index"],$vars["category"],$vars);
    }

    public function createAction()
    {
        $this->view->render(["category","create"],"создание категории");
    }

    public function storeAction()
    {
        move_uploaded_file($_FILES["img"]["tmp_name"],"public/img/categories/".$_FILES["img"]["name"]);
        $_POST["img"] = $_FILES["img"]["name"];
        $category = new Category();
        $category->create($_POST);
        $vars = [
            "categories" => $this->model->get()
        ];
        $this->view->render(["category","create"],"создание категории",$vars);
    }

    public function adminAction()
    {
        $vars = [
            "categories" => $this->model->get()
        ];

        $this->view->render(["category","admin"],"Категории",$vars);
    }

    public function editAction()
    {
        $vars =  ["category" => $this->model->find($_GET["id"])];
        $this->view->render(["category","create"],"создание категории",$vars);
    }

    public function updateAction()
    {
        $category = $this->model->find($_GET["id"]);
        $category->update($_POST);
        $this->view->redirect("/admin/category");
    }

    public function deleteAction()
    {
        $this->model->find($_GET["id"])->delete();
        $this->view->redirect("/admin/category");
    }
}