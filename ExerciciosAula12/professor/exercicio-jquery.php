<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="/thiago/jquery-ui/jquery-ui.min.css">
</head>
<body>
<?php
	print 'Valores recebidos: <br/>';
	foreach ($_POST as $chave => $valor) {
		print "$chave => $valor <br/>";
	}
?>
	<br/>
	<form action="" method="post" 
			onsubmit="return valida()">
		<label for="nome">Nome: </label>
		<input type="text" name="nome" id="nome" size="50"/> <br/>
		<label for="data">Data de nascimento: </label>
		<input type="text" name="data" id="data" size="20"/> <br/>
		<label>Sexo: </label>
		<input type="radio" name="sexo" id="sexoF" value="Feminino"/>
		<label for="sexoF">F</label>
		&nbsp;
		<input type="radio" name="sexo" id="sexoM" value="Masculino"/>
		<label for="sexoM">M</label>
		&nbsp;
		<input type="radio" name="sexo" id="sexoGNB" value="Não binário" />
		<label for="sexoGNB">Não binário</label> <br/>
		<label for="curso">Curso:</label>
		<input type="text" name="curso" id="curso" size="50" /><br/>
		<input type="checkbox" name="declaracao" id="declaracao" value="Sim"/>
		<label for="declaracao">Declaro que sou um aluno</label> <br/>
		<input type="submit" value="Enviar">
	</form>
	<div id="dialogo"></div>
	<script type="text/javascript" src="/thiago/jquery.min.js"></script>
	<script type="text/javascript" src="/thiago/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#curso').autocomplete({
				source: [
					{value: "ADS",
					 label: "Análise e Desenvolvimento de Sistemas"},
					{value: "RED",
					 label: "Redes de Computadores"},
					{value: "SPI", 
					 label: "Sistemas para Internet"}
				]
			});
			$('#data').datepicker({
				dateFormat: 'dd/mm/yy',
				defaultDate: '01/01/1990',
				changeMonth: true,
				changeYear: true,
			});
			$('#dialogo').dialog({
				autoOpen: false,
				title: 'Atenção!'
			});
		});

	function valida() {
		if ($('#nome').val() == '') {
			$('#dialogo').html('Nome não pode ficar em branco');
			$('#dialogo').dialog('open');
			return false;
		}
		if (!$('#sexoF').prop('checked')
			&& !$('#sexoM').prop('checked')
			&& !$('#sexoGNB').prop('checked')) {
			$('#dialogo').html('Sexo não pode ficar em branco');
			$('#dialogo').dialog('open');
			return false;
		}
		if ($('#curso').val() == '') {
			$('#dialogo').html('Curso não pode ficar em branco');
			$('#dialogo').dialog('open');
			return false;
		}
		if (!$('#declaracao').prop('checked')) {
			$('#dialogo').html('Marque a declaração!');
			$('#dialogo').dialog('open');
			return false;
		}
		return true;
	}
	</script>
</body>
</html>