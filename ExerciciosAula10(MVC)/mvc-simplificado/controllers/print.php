<?php
if (isset($_SESSION['cachorro'])) {
	$cachorro = $_SESSION['cachorro'];
	// imprime os dados do cachorro
	require_once __DIR__.'/../views/mostraCachorro.php';
}
else {
	print 'Não existe cachorro';
}