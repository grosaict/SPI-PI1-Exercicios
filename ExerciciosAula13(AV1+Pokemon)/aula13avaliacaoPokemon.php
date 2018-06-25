<?php
	$incluir = $_GET['r'];
	require_once __DIR__.'/pokemon/'.$incluir.'.php';
	print '<br/><a href="aula13avaliacaoMain.php">Voltar</a>';
?>