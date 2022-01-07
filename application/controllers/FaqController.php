<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Faq;

class FaqController extends Controller
{
    protected Faq $model;

    public function __construct(Faq $faq)
    {
        $this->model = $faq;
    }

    public function indexAction()
    {
        $vars = [
            "faqs" => $this->model->where("answer","!=",null)->get()
        ];
        $this->view->render(["faq","index"],"Вопросы и ответы", $vars);
    }

    public function storeAction()
    {
        $faq = new Faq();
        $faq->create($_POST);
    }
}