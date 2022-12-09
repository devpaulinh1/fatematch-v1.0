<?php

namespace Fatematch\Model;

use \Fatematch\DB\Sql;
use \Fatematch\Model;

class Game extends Model{

	public static function listTopGames() {
		$sql = new Sql();

		return $sql->select("SELECT j.*, Count(*) AS qtdSalas FROM tb_salas s
							LEFT JOIN tb_jogos j ON j.id_jogo = s.id_jogo
							GROUP BY s.id_jogo
							HAVING Count(*) > 0
							ORDER BY qtdSalas DESC LIMIT 2");
	}

}

?>
