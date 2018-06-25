<?php
	if (isset($_POST['nro'])) {
		require_once '00pokemon.php';
		session_start();
		$nro = $_POST['nro'];
		$nome = $_POST['nome'];
		$tipo1 = $_POST['tipo1'];
		$tipo2 = $_POST['tipo2'];
		$pokemon = new pokemon();
		$pokemon->setNro($nro);
		$pokemon->setNome($nome);
		$pokemon->setTipo1($tipo1);
		$pokemon->setTipo2($tipo2);
		$_SESSION['pokemon'] = $pokemon;
		print 'Pokémon '.$pokemon->getNome().' criado!';
	}else{
?>
		<!DOCTYPE html>
		<html lang="pt-BR">
		<head>
			<meta charset="utf-8">
			<title>Pokémon</title>
		</head>
		<body>
			<h1>Pokémon</h1>
			<form method="post">
				<fieldset>
					<legend>Dados do Pokémon</legend>
					<label for="nro">Número</label>
					<input type="number" name="nro" id="nro" placeholder="[campo obrigatório]" autofocus required>
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="[campo obrigatório]" required>
					<label for="tipo1">Tipo 1</label>
					<select id="tipo1" name="tipo1">
						<option value="">Selecione...</option>
					</select>
					<label for="tipo2">Tipo 2</label>
					<select id="tipo2" name="tipo2">
						<option value="">Selecione...</option>
					</select>
					<input type="submit" name="enviar" id="vai" value="Criar">
				</fieldset>
			</form>

		</body>
		</html>
<?php
	}
?>