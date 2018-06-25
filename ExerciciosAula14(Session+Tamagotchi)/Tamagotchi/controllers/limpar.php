<html lang="pt-br">
<meta charset="UTF-8">
<?php
	spl_autoload_register(
		function ($nomeDaClasse) {
			require_once __DIR__.'/../models/'.$nomeDaClasse.'.php';
		}
	);
	session_start();
	if (isset($_SESSION['tamagotchi'])) {
		$_SESSION['tamagotchi']->limpar();
	} else {
		print ("Não há Tamagotchi para limpar!!!<br/>");
		print("<a href='principal.php?r=/views/criar'>Criar um Tamagotchi</a> <br/>");
	}
?>