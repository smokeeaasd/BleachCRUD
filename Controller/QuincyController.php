<?php

namespace App\Controller;

use App\Model\QuincyModel;

class QuincyController extends Controller {
	public static function index() {
		$model = new QuincyModel();
		$model->getAllRows();

		parent::render("Quincy/ListaQuincy", $model);
	}

	public static function form() {
		$model = new QuincyModel();

		if (isset($_GET['id']))
			$model = $model->getById((int)$_GET['id']);
		
		parent::render("Quincy/FormQuincy", $model);
	}

	public static function save() {
		$model = new QuincyModel();

		$model->id = $_POST['id'];
		$model->nome = $_POST['nome'];
		$model->avatar_quincy = $_POST['avatar_quincy'];
		$model->descricao = $_POST['descricao'];

		$model->save();

		header("Location: /quincy");
	}

	public static function delete() {
		$model = new QuincyModel();

		$model->delete((int)$_GET['id']);

		header("Location: /quincy");
	}
}

?>