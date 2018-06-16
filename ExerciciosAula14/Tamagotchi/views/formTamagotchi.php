<?php
	if (isset($_POST['idade'])) {
    	$tamagotchi = new Tamagotchi();
	    $tamagotchi->setIdade($_POST['idade']);
	    $tamagotchi->setFome($_POST['fome']);
	    $tamagotchi->setAfeto($_POST['afeto']);
	    $tamagotchi->setDiversao($_POST['diversao']);
	    $_SESSION['tamagotchi'] = $tamagotchi;
	    print("Tamagotchi criado!!!");?>
			<a href="index.php">Voltar</a> <br/>
		<?php
    }else{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Cadastrar Tamagotchi</title>
		</head>
		<body>
			<form method="post">
				<label for="idade">Idade: </label>
				<input type="number" name="idade" id="idade"/><br/>
				<label for="fome">Nível de Fome: </label>
				<input type="number" name="fome" id="fome"><br/>
				<label for="afeto">Nível de Afeto: </label>
				<input type="number" name="afeto" id="afeto"><br/>
				<label for="diversao">Nível de Diversão: </label>
				<input type="number" name="diversao" id="diversao"><br/>
				<input type="submit" value="Cadastrar!">
			</form>
		</body>
		</html>
<?php
	}
?>