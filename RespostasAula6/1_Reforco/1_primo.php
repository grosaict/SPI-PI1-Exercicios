<?php
$numero = 7;
$divisor = 2;

while (($numero % $divisor != 0) 
	&& ($divisor < ($numero/2))) {
	$divisor++;
}

if ($divisor < ($numero/2)) {
	print $numero.' não é primo.';
}
else {
	print $numero.' é primo.';	
}