<?php

session_start();

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Fatematch\Page;
use \Fatematch\Model\User;
use \Fatematch\Model\Game;
use \Fatematch\Model\Group;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
	$page = new Page();

	$page->setTpl("index");
});

$app->get('/login', function() {
	$page = new Page();

	$page->setTpl("login");
});

$app->get('/cadastro', function() {
	$page = new Page();

	$page->setTpl("cadastro");
});

$app->post('/cadastro', function() {
	User::save($_POST["email"], $_POST["username"], $_POST["password"]);

	header("Location: /login");

	exit;
});

$app->post('/login', function() {
	User::login($_POST["email"], $_POST["password"]);

	header("Location: /destaques");

	exit;
});

$app->get('/destaques', function() {
	User::verifyLogin();

	$topGames = Game::listTopGames();
	$randomGroups = Group::listRandomGroups();

	$page = new Page();

	$page->setTpl("destaques", [
		'topGames'=>$topGames,
		'randomGroups'=>$randomGroups
	]);

});

$app->get('/salas', function() {
	User::verifyLogin();

	$allGroups = Group::listAllGroups();

	$page = new Page();

	$page->setTpl("salas", [
		'allGroups'=>$allGroups
	]);

});

$app->get('/logout', function() {
	User::logout();

	header("Location: /login");

	exit;

});

$app->run();

?>
