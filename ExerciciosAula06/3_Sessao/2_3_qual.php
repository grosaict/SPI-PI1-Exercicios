<?php
session_start();

if (isset($_SESSION['id'])) {
	print 'O seu número de matrícula é ';
	print $_SESSION['id'];
}
else {
	print 'Não existe sessão iniciada!';
}