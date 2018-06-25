<?php
require_once 'Cachorro.php';
session_start();
if (isset($_SESSION['cachorro'])) {
	session_unset();
	session_destroy();
	print '<h1>;___;</h1>';
}
else {
	print '<a href="formulario.php">
				Criar um cachorro
			</a>';
}