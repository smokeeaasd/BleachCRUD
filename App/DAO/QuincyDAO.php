<?php

namespace App\DAO;

use App\Model\QuincyModel;
use \PDO;

class QuincyDAO extends DAO {
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(QuincyModel $model) {
		$sql = "INSERT INTO quincy(nome, avatar_quincy, descricao) VALUES (?, ?, ?) ";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->avatar_quincy);
		$stmt->bindValue(3, $model->descricao);

		$stmt->execute();
	}

	public function update(QuincyModel $model) {
		$sql = "UPDATE quincy SET nome=?, avatar_quincy=?, descricao=? WHERE id=?";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->avatar_quincy);
		$stmt->bindValue(3, $model->descricao);
		$stmt->bindValue(4, $model->id);

		$stmt->execute();
	}

	public function select() {
		$sql = "SELECT id, nome, avatar_quincy, descricao FROM quincy ";

		$stmt = $this->conexao->prepare($sql);
		
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id) {
		$sql = "SELECT id, nome, avatar_quincy, descricao FROM quincy WHERE id = ? ";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $id);

		$stmt->execute();

		return $stmt->fetchObject("\app\Model\QuincyModel");
	}

	public function delete(int $id) {
		$sql = "DELETE FROM quincy WHERE id = ?";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $id);

		$stmt->execute();
	}
}

?>