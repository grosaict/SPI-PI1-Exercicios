<?php
	session_start();
	if (!isset($_SESSION['nome']) && isset($_POST['nome'])) {
		$_SESSION['nome'] = $_POST['nome'];
	}
	if (isset($_POST['morreu'])){
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Página do Cachorro (Exercício Aula 9)</title>
</head>
<body>
	<form name="exerciciosAula9" action="cachorro.php" method="post">
			<fieldset>
				<legend>Cachorro</legend>
		<?php	if (!isset($_SESSION['cachorro'])) { ?>
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" placeholder="[campo obrigatório]" autofocus required>
				<label for="raca">Raça</label>
				<input type="text" name="raca" id="raca" placeholder="[campo obrigatório]" required>
				<label for="nasc">Nascimento</label>
				<input type="date" name="nasc" id="nasc" required>
				<input type="submit" name="enviar" id="vai" value="Vamos lá!!!">
		<?php	} ?>
		<?php	if (isset($_SESSION['cachorro'])) { ?>
				<input type="submit" name="morreu" id="morreu" value="LOGOFF">
		<?php	} ?>
			</fieldset>
		</form>
</body>
</html>