<!--	5. Criar uma página que verifique se há um cachorro salvo na sessão e, se houver, destrua a sessão e,
		consequentemente, o cachorro, além de imprimir na tela “;___;”. Se não houver um cachorro na sessão,
		exibir um link para a página criada anteriormente (formulário). -->

<?php
	require_once '01Cachorro.php';
	session_start();
	if (isset($_SESSION['cachorro'])) {
		session_unset();
		session_destroy();
		print '<h1>;___;</h1>';
	} else {
		print '<a href="06criaCachorro.php?r=02formCachorro">Adotar um cachorro</a>';
	}
?>