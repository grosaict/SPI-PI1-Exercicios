<?php

$array = array();
$array[0][0] = '001';
$array[0][1] = 'Arroz';
$array[1][0] = '002';
$array[1][1] = 'Feijão';
$array[2][0] = '003';
$array[2][1] = 'Farinha';
$array[3][0] = '004';
$array[3][1] = 'Açúcar';
$array[4][0] = '005';
$array[4][1] = 'Sal';

print '<table>';
print ' <tbody>';
for ($i = 0; $i < count($array); $i++) { 
	print '<tr>';
	print ' <td>'.$array[$i][0].'</td>';
	print ' <td>'.$array[$i][1].'</td>';
	print '</tr>';
}
print ' </tbody>';
print '</table>';