<?php
require_once 'Cachorro.php';
session_start();
if (isset($_SESSION['cachorro'])) {
	// passear com o cachorro
	$_SESSION['cachorro']->passear();
}
else {
	print '<a href="form.php">Cadastrar</a>';
}