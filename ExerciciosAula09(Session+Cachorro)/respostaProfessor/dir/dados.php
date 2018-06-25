<?php
require_once 'Cachorro.php';
session_start();
if (isset($_SESSION['cachorro'])) {
	$cachorro = $_SESSION['cachorro'];
	print 'Nome: '.$cachorro->getNome().'<br/>';
	print 'Raça: '.$cachorro->getRaca().'<br/>';
}
else {
	print '<a href="inclui.php?r=formulario">
				Adotar um cachorro
			</a>';
}