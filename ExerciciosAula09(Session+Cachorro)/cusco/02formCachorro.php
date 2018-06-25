<!--	2. Criar uma página que contenha um formulário para preencher os atributos da classe cachorro. Ao enviar esse
		formulário, a página deve instanciar um objeto da classe Cachorro e salvar esse objeto na sessão
		($_SESSION[‘cachorro’], por exemplo). -->

<?php
	if (isset($_POST['nome'], $_POST['raca'], $_POST['nasc'])) {
		require_once '01Cachorro.php';
		session_start();
		$nome = $_POST['nome'];
		$raca = $_POST['raca'];
		$nasc = $_POST['nasc'];
		$cachorro = new Cachorro();
		$cachorro->setNome($nome);
		$cachorro->setRaca($raca);
		$cachorro->setNasc($nasc);
		$_SESSION['cachorro'] = $cachorro;
		print 'Cachorro criado!';
	}else{
?>
		<!DOCTYPE html>
		<html lang="pt-BR">
		<head>
			<meta charset="utf-8">
			<title>Página do Cachorro (Exercício Aula 9)</title>
		</head>
		<body>
			<h1>Adotar um cachorro</h1>
			<form name="exerciciosAula9" method="post"> <!-- não devo usar action="01Cachorro.php" se usei o require_once -->
					<fieldset>
						<legend>Cachorro</legend>
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" placeholder="[campo obrigatório]" autofocus required>
						<label for="raca">Raça</label>
						<input type="text" name="raca" id="raca" placeholder="[campo obrigatório]" required>
						<label for="nasc">Nascimento</label>
						<input type="date" name="nasc" id="nasc" required>
						<input type="submit" name="enviar" id="vai" value="Vamos lá!!!">
					</fieldset>
				</form>
		</body>
		</html>
<?php
	}
?>