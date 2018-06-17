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
		$t = $_SESSION['tamagotchi'];
		if (!$t->estaMorto()) {
			require __DIR__.'/exibir.php';
			print('<a href="principal.php?r=/controllers/alimentar">Alimentar Tamagotchi</a> <br/>');
			print('<a href="principal.php?r=/controllers/carinho">Fazer carinho</a> <br/>');
			print('<a href="principal.php?r=/controllers/brincar">Brincar com Tamagotchi</a> <br/>');
			print('<a href="principal.php?r=/controllers/limpar">Limpar o Tamagotchi</a> <br/><br/>');
		}
	} else{
		print("Não há Tamagotchi na sessão!!!</br>");
		print("<a href='principal.php?r=/views/criar'>Criar um Tamagotchi</a> <br/>");
	}
?>