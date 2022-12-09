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

$app->get('/logout', function() {
	User::logout();

	header("Location: /login");

	exit;

});

$app->run();

?>
