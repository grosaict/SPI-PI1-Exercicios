<html lang="pt-br">
<meta charset="UTF-8">
<?php
	if (isset($_SESSION['tamagotchi'])) {
		$t = $_SESSION['tamagotchi'];
		if (!$t->estaMorto()) {
			print("Idade: ".$t->getIdade()."<br/>");
			print("Nível de Fome: ".$t->getFome()."<br/>");
			print("Nível de Afeto: ".$t->getAfeto()."<br/>");
			print("Nível de Diversão: ".$t->getDiversao()."<br/><br/>");
		}
	} else{
		print("Não há Tamagotchi na sessão!!!</br>");
		print("<a href='principal.php?r=/views/criar'>Criar um Tamagotchi</a> <br/>");
	}
?>