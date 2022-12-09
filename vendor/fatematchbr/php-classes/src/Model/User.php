<?php

namespace Fatematch\Model;

use \Fatematch\DB\Sql;
use \Fatematch\Model;

class User extends Model{

	const SESSION = "User";

	protected $fields = [
		"id_usuario", "email", "nome_usuario", "senha"
	];

	public static function login($email, $password):User {
		$db = new Sql();

		$results = $db->select("SELECT * FROM tb_usuarios WHERE email = :EMAIL", array(
			":EMAIL"=>$email
		));

		if (count($results) === 0) {
			throw new \Exception("CREDENCIAIS INEXISTENTES.");
		}

		$data = $results[0];

		if (password_verify($password, $data["senha"])) {
			$user = new User();
			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			return $user;

		} else {
			throw new \Exception("CREDENCIAIS INEXISTENTES.");
		}
	}

	public static function verifyLogin() {
		if (
			!isset($_SESSION[User::SESSION])
			||
			!$_SESSION[User::SESSION]
			||
			!(int)$_SESSION[User::SESSION]["id_usuario"] > 0
		) {
			header("Location: /login");
			exit;
		}
	}

	public static function logout() {
		$_SESSION[User::SESSION] = NULL;
	}

}

?>
