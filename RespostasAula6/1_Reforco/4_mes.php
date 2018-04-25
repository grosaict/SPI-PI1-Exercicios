<?php

$mes = 9;
$meses = array(
	'Janeiro', 	//0
	'Fevereiro',//1
	'Março',	//...
	'Abril',	
	'Maio',	
	'Junho',	
	'Julho',	
	'Agosto',	
	'Setembro',	
	'Outubro',	
	'Novembro',	
	'Dezembro',	
);

if (($mes >= 1) && ($mes <= 12)) {
	print date("F", strtotime("1960-$mes-02"));
	print '<br/>';
	print $meses[$mes-1];
}
else {
	print 'Não existe mês com esse número.';
}