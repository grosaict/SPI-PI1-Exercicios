<html lang="pt-br">
<meta charset="UTF-8">
<?php
	session_start();
	if (isset($_SESSION['tamagotchi'])) {
		session_unset();
		session_destroy();
		print ("Já eras!!!<br/>");
	} else {
		print ("Não há Tamagotchi para enterrar!!!<br/>");
		print("<a href='principal.php?r=/views/criar'>Criar um Tamagotchi</a> <br/>");
	}
?>