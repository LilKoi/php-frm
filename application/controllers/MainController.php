<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Card;
use application\lib\Db;
class MainController extends Controller {

	public function indexAction() {
		$db = new Db();
		$db = $db->connection();
		$nows = $db->table("cards")->orderBy('id', 'desc')->take(4)->get();
		$vars = [
			"nows" => $nows
		];
		$route = ["main","index"];
		$this->view->render($route,'Главная страница',$vars);
	}

}