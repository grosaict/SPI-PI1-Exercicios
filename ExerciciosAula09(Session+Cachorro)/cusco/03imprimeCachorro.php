<!--	3. Criar uma página que verifique se há um cachorro salvo na sessão e, se houver, imprime na tela os atributos dele. Se
		não houver um cachorro na sessão, exibir um link para a página criada anteriormente (formulário). -->

<?php
	require_once '01Cachorro.php';
	session_start();
	if (isset($_SESSION['cachorro'])) {
		$cachorro = $_SESSION['cachorro'];
		print 'Nome: '.$cachorro->getNome().'<br/>';
		print 'Raça: '.$cachorro->getRaca().'<br/>';
		print 'Nasc: '.$cachorro->getNasc().'<br/>';
	} else {
		print '<a href="06criaCachorro.php?r=02formCachorro">Adotar um cachorro</a>';
	}
?>