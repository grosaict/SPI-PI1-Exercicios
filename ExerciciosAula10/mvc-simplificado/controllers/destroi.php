<?php
require_once 'Cachorro.php';
session_start();
if (isset($_SESSION['cachorro'])) {
	// destruir a sessão
	unset($_SESSION['cachorro']);
	session_destroy();
	print ';___;';
}
else {
	print '<a href="form.php">Cadastrar</a>';
}