<?php
$incluir = $_GET['r'];

require_once __DIR__.'/dir/'.$incluir.'.php';

print '<br/><a href="index.php">Voltar</a>';