<?php
spl_autoload_register(function ($class_name) {
	try {
    	require_once "pokemon/".$class_name.'.php';
    }
    catch (Exception $e) {
    	print $e->getMessage();
    }
});
session_start();
// conectar no BD
try {
	$conexao = new PDO(
		'mysql:host=localhost;dbname=pokemon',
		'root', '');
}
catch (Exception $e) {
	print 'Deu ruim!';
}
if (!isset($_SESSION['pokedex'], $_SESSION['pokemon'], $_SESSION['tipos'])) {
	$_SESSION['pokedex'] = new Pokedex();
	$_SESSION['pokemon'] = array();
	$_SESSION['tipos'] = array();
}

if (isset($_POST['infoCaptura'])) {
	$_SESSION['pokedex']->exibeInfoCaptura($_POST['infoCaptura']); 
	die;
}
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Pokémon Test</title>
	<link rel="stylesheet" type="text/css" href="jquery/jquery-ui.min.css"/>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#dialog").dialog({title: 'Informações do Pokémon', width:500, height:400, autoOpen: false});
		})
		function exibeInfoCaptura(numero) {
			$("#dialog").load('index.php', {infoCaptura: numero});
			$("#dialog").dialog('open');
		}
	</script>
</head>
<body>
<?php
	if (isset($_GET['r'])) {
		switch ($_GET['r']) {
			case 'tipo': 
				GUI::formTipo();
			break;
			case 'pokemon':
				GUI::formPokemon();
			break;
			case 'captura':
				GUI::formCaptura();
			break;
			case 'pokedex':
				GUI::listaPokedex();
			break;
			case 'apaga':
				GUI::apagaPokedex();
			break;
			default:
				GUI::menuInicial();
		}
	}
	else {
		GUI::menuInicial();
	}
?>
<div id="dialog" style="display:none"></div>
</body>
</html>