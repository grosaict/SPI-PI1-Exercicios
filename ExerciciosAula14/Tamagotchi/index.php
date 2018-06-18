<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8"/>
</head>
<body>
<?php
	spl_autoload_register(
		function ($nomeDaClasse) {
			require_once __DIR__.'/models/'.$nomeDaClasse.'.php';
		}
	);
	session_start();
	if (!isset($_SESSION['tamagotchi'])) {
?>
		<a href="principal.php?r=/views/criar">Criar um Tamagotchi</a> <br/>
<?php
	} else {
		require __DIR__.'/views/exibir.php';
?>
		<a href="principal.php?r=/controllers/alimentar">Alimentar Tamagotchi</a> <br/>
		<a href="principal.php?r=/controllers/carinho">Fazer carinho</a> <br/>
		<a href="principal.php?r=/controllers/brincar">Brincar com Tamagotchi</a> <br/>
		<a href="principal.php?r=/controllers/limpar">Limpar o Tamagotchi</a> <br/>
		<a href="principal.php?r=/controllers/enterrar">Enterrar Tamagotchi</a> <br/>
<?php
	}
?>
</body>
</html>