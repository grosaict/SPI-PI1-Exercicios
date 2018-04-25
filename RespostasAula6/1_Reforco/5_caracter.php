<?php

$caracter = 'a';
$string = 'No mundo atual, a determinação clara de objetivos estende o alcance e a importância dos paradigmas corporativos.';
$contador = 0;

print substr_count($string, $caracter);
print '<br/>';
for ($i=0; $i < strlen($string); $i++) { 
	if ($string[$i] == $caracter) {
		$contador++;
	}
}
print $contador;