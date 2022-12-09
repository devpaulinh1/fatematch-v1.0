<?php

namespace Fatematch\Model;

use \Fatematch\DB\Sql;
use \Fatematch\Model;

class Group extends Model{

	public static function listRandomGroups() {
		$sql = new Sql();

		return $sql->select("SELECT s.*, j.nome FROM tb_salas s
							INNER JOIN tb_jogos j ON j.id_jogo = s.id_jogo
							ORDER BY RAND() LIMIT 2");
	}

	public static function listAllGroups() {
		$sql = new Sql();

		return $sql->select("SELECT s.*, j.nome FROM tb_salas s
							INNER JOIN tb_jogos j ON j.id_jogo = s.id_jogo WHERE 1 = 1");
	}

}

?>
