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
			// throw new \Exception("CREDENCIAIS INEXISTENTES.");
			echo ("<script>alert('CREDENCIAIS INEXISTENTES.')</script>");
			echo '<meta http-equiv="refresh" content="0;url=/login">';
			exit;
		}

		$data = $results[0];

		if (password_verify($password, $data["senha"])) {
			$user = new User();
			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			return $user;

		} else {
			// throw new \Exception("CREDENCIAIS INEXISTENTES.");
			echo ("<script>alert('CREDENCIAIS INEXISTENTES.')</script>");
			echo '<meta http-equiv="refresh" content="0;url=/login">';
			exit;
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

	public function save($email, $username, $password):User {
		$db = new Sql();

		$results = $db->select("SELECT * FROM tb_usuarios WHERE email = :EMAIL", array(
			":EMAIL"=>$email
		));

		if (count($results) > 0) {
			// throw new \Exception("ESSE E-MAIL JÁ ESTÁ REGISTRADO.");
			echo ("<script>alert('ESSE E-MAIL JÁ ESTÁ REGISTRADO.')</script>");
			echo '<meta http-equiv="refresh" content="0;url=/cadastro">';
			exit;
		}

		//PARA O FUTURO: ADICIONAR HASH DE SENHA
		$results = $db->select("INSERT INTO tb_usuarios(email, nome_usuario, senha) VALUES (:EMAIL, :NOME_USUARIO, :SENHA)", array(
			":EMAIL"=>$email,
			":NOME_USUARIO"=>$username,
			":SENHA"=>$username
		));

		$user = new User();

		return $user;

	}

}

?>
