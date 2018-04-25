<?php
$imagem = 'http://s.glbimg.com/po/rc/media/2015/11/10/12_07_13_265_pudim_de_leite_condensado_4.jpg';
$nr_vezes = 8;

for ($i = 0; $i < $nr_vezes; $i++) { 
	print '<img src="'.$imagem.'" alt="Foto de um pudim de leite"/>';
}
