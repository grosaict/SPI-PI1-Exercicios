<?php
if (isset($_POST['nome'], $_POST['raca'])) {
	session_start();
	require_once 'Cachorro.php';
	$nome = $_POST['nome'];
	$raca = $_POST['raca'];
	$cachorro = new Cachorro();
	$cachorro->setNome($nome);
	$cachorro->setRaca($raca);
	$_SESSION['cachorro'] = $cachorro;
	print 'Cachorro criado!';
}
else {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Formulário</title>
		<meta charset="utf8" />
	</head>
	<body>
		<h1>Adotar um cachorro</h1>
		<form method="post">
			<label for="nome">Nome:</label>
			<input type="text" id="nome" name="nome" size="50"/> <br/>
			<label for="raca">Raça:</label>
			<input type="text" id="raca" name="raca" size="50"/> <br/>
			<input type="submit" value="Criar"/>
		</form>
	</body>
	</html>
<?
}