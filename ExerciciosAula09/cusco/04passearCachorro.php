<!--	4. Criar uma página que verifique se há um cachorro salvo na sessão e, se houver, invoque o método passear() do
		cachorro. Se não houver um cachorro na sessão, exibir um link para a página criada anteriormente (formulário). -->

<?php
	require_once '01Cachorro.php';
	session_start();
	if (isset($_SESSION['cachorro'])) {
		$cachorro = $_SESSION['cachorro'];
		$cachorro->passear();
	} else {
		print '<a href="06criaCachorro.php?r=02formCachorro">Adotar um cachorro</a>';
	}
?>