<?php

namespace application\controllers;

use application\core\Controller;
use application\models\User;
class AccountController extends Controller
{

    protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;    
    }

    public function createAction()
    {
        $user = new User();
        $user->create($_POST);
        $_SESSION["admin"] = true;
        header("Location: /");
    }

    public function loginAction()
    {
        $this->view->render(["account",'login'],"Авторизация");
    }

    public function registerAction()
    {
        $this->view->render(["account",'register'],"Регистрация");
    }

    public function logAuthAction()
    {
        $user = $this->model->where("email",$_POST["email"])->first();
        if($user != null) {
            if($user["password"] == $_POST["password"]) {
                $_SESSION["admin"] = $user;
                header("Location: /");
            } else {
                $this->view->errorCode(403);
            }
        }else {
            $this->view->errorCode(403);
        }
    }
}