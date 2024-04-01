<?php

namespace App\Model;

use App\DAO\ArrancarDAO;

class ArrancarModel extends Model {
	public $id, $nome, $avatar_arrancar, $descricao;
	public function save() {
		$dao = new ArrancarDAO;

		if (empty($this->id)) {
			$dao->insert($this);
		} else {
			$dao->update($this);
		}
	}

	public function getAllRows() {
		$dao = new ArrancarDAO();

		$this->rows = $dao->select();
	}

	public function getById(int $id) {
		$dao = new ArrancarDAO();

		$obj = $dao->selectById($id);

		return ($obj) ? $obj : new ArrancarModel();
	}

	public function delete(int $id) {
		$dao = new ArrancarDAO();

		$dao->delete($id);
	}
}

?>