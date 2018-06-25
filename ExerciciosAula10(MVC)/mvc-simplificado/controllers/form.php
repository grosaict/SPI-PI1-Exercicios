<?php
if (isset($_POST['nome'], $_POST['raca'])) {
	// cria o objeto cachorro
	$cachorro = new Cachorro();
	$cachorro->setNome($_POST['nome']);
	$cachorro->setRaca($_POST['raca']);
	// cadastrar o cachorro na sessão 
	unset($_SESSION['cachorro']);
	$_SESSION['cachorro'] = $cachorro;
	print 'Cachorro cadastrado!';
}
else {
	// chama a view com o formulário
	require_once __DIR__.'/../views/formCachorro.php';
}