<?php

namespace App\DAO;

use App\Model\ArrancarModel;
use \PDO;

class ArrancarDAO extends DAO {
	public function __construct()
	{
		parent::__construct();
	}

	public function insert(ArrancarModel $model) {
		$sql = "INSERT INTO arrancar(nome, avatar_arrancar, descricao) VALUES (?, ?, ?) ";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->avatar_arrancar);
		$stmt->bindValue(3, $model->descricao);

		$stmt->execute();
	}

	public function update(ArrancarModel $model) {
		$sql = "UPDATE arrancar SET nome=?, avatar_arrancar=?, descricao=? WHERE id=?";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->nome);
		$stmt->bindValue(2, $model->avatar_arrancar);
		$stmt->bindValue(3, $model->descricao);
		$stmt->bindValue(4, $model->id);

		$stmt->execute();
	}

	public function select() {
		$sql = "SELECT id, nome, avatar_arrancar, descricao FROM arrancar ";

		$stmt = $this->conexao->prepare($sql);
		
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectById(int $id) {
		$sql = "SELECT id, nome, avatar_arrancar, descricao FROM arrancar WHERE id = ? ";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $id);

		$stmt->execute();

		return $stmt->fetchObject("\app\Model\ArrancarModel");
	}

	public function delete(int $id) {
		$sql = "DELETE FROM arrancar WHERE id = ?";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $id);

		$stmt->execute();
	}
}

?>