<?php

namespace App\Controller;

use App\Model\ArrancarModel;

class ArrancarController extends Controller {
	public static function index() {
		$model = new ArrancarModel();
		$model->getAllRows();

		parent::render("Arrancar/ListaArrancar", $model);
	}

	public static function form() {
		$model = new ArrancarModel();

		if (isset($_GET['id']))
			$model = $model->getById((int)$_GET['id']);
		
		parent::render("Arrancar/FormArrancar", $model);
	}

	public static function save() {
		$model = new ArrancarModel();

		$model->id = $_POST['id'];
		$model->nome = $_POST['nome'];
		$model->avatar_arrancar = $_POST['avatar_arrancar'];
		$model->descricao = $_POST['descricao'];

		$model->save();

		header("Location: /arrancar");
	}

	public static function delete() {
		$model = new ArrancarModel();

		$model->delete((int)$_GET['id']);

		header("Location: /arrancar");
	}
}

?>