<!--	6. Criar uma página que receba uma string por parâmetro passador via GET (na URL) e, considerando que o
		parâmetro recebido contém o nome de um arquivo PHP que está localizado em um subdiretório, inclui esse arquivo. -->

<?php
	$incluir = $_GET['r'];
	require_once __DIR__.'/cusco/'.$incluir.'.php';
	print '<br/><a href="07index.html">Voltar</a>';
?>