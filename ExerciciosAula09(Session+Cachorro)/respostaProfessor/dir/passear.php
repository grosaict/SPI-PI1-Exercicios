<?php
require_once 'Cachorro.php';
session_start();
if (isset($_SESSION['cachorro'])) {
	$cachorro = $_SESSION['cachorro'];
	$cachorro->passear();
}
else {
	print '<a href="inclui.php?r=formulario">
				Adotar um cachorro
			</a>';
}