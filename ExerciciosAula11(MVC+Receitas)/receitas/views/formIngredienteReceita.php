
<?php
//* Diego e Henrique
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
		<label for="ingrediente">Ingrediente:</label>
		<select> 
			<option selected="selected">Escolha Ingrediente</option>
			<?php
			foreach ($_SESSION['ingredientes'] as 
				$indice => $ingrediente) {	?>
				<option value="<?= $indice ?>">
					<?= $ingrediente->getNome() ?>
				</option>
			<?php
			} ?>
			

		</select><br/>
		<label for="quantidade">Quantidade:</label>
		<input type="text" name="quantidade" id="quantidade"/> <br/>
		<label for="unidade">Unidade de Medida:</label>
		<input type="text" name="unidade" id="unidade"/> <br/>	
		<br/>
		<input type="submit" value="Enviar"/>
	</form>
</body>
</html>