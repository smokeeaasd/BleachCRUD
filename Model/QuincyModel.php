<?php

namespace App\Model;

use App\DAO\QuincyDAO;

class QuincyModel extends Model {
	public $id, $nome, $avatar_quincy, $descricao;
	public function save() {
		$dao = new QuincyDAO;

		if (empty($this->id)) {
			$dao->insert($this);
		} else {
			$dao->update($this);
		}
	}

	public function getAllRows() {
		$dao = new QuincyDAO();

		$this->rows = $dao->select();
	}

	public function getById(int $id) {
		$dao = new QuincyDAO();

		$obj = $dao->selectById($id);

		return ($obj) ? $obj : new QuincyModel();
	}

	public function delete(int $id) {
		$dao = new QuincyDAO();

		$dao->delete($id);
	}
}

?>