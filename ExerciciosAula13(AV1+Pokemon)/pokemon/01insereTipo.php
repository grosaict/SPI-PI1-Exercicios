<?php
	if (isset($_POST['tipo'])) {
		require_once '00tipo.php';
		session_start();
		$tipo = $_POST['tipo'];
		$fraquezas = $_POST['fraquezas'];
		$vantagens = $_POST['vantagens'];
		$tipoPokemon = new tipoPokemon();
		$tipoPokemon->setTipo($tipo);
		$tipoPokemon->setFraquezas($fraquezas);
		$tipoPokemon->setVantagens($vantagens);
		$_SESSION['tipoPokemon'][] = $tipoPokemon;
		print 'Tipo Pokémon '.$tipoPokemon->getTipo().' criado!';
	}else{
?>
		<!DOCTYPE html>
		<html lang="pt-BR">
		<head>
			<meta charset="utf-8">
			<title>Tipo Pokémon</title>
		</head>
		<body>
			<h1>Tipo Pokémon</h1>
			<form method="post">
					<fieldset>
						<legend>Dados do Tipo do Pokémon</legend>
						<label for="tipo">Tipo</label>
						<input type="text" name="tipo" id="tipo" placeholder="[campo obrigatório]" autofocus required>
						<label for="fraquezas">Fraquezas</label>
						<input type="text" name="fraquezas" id="fraquezas" placeholder="[campo obrigatório]" required>
						<label for="vantagens">Vantagens</label>
						<input type="text" name="vantagens" id="vantagens" placeholder="[campo obrigatório]" required>
						<input type="submit" name="enviar" id="vai" value="Criar">
					</fieldset>
				</form>
		</body>
		</html>
<?php
	}
?>