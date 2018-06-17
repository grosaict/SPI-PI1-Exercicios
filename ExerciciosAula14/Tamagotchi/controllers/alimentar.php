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
		$_SESSION['tamagotchi']->alimentar();
		print("<a href='principal.php?r=/views/interagir'>Interagir novamente</a> <br/>");
	} else {
		print ("Não há Tamagotchi para alimentar!!!<br/>");
		print("<a href='principal.php?r=/views/criar'>Criar um Tamagotchi</a> <br/>");
	}
?>