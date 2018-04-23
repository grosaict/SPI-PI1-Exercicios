<html lang="pt-br">
	<head> <meta charset="UTF-8"> </head>
</html>
<!--	1.Escrever um programa que inicia uma sessão e escreve seu número de matrícula no índice ‘id’ do array de sessão (Dica: não esquecer de iniciar a sessão!). 

<?php
	//session_start();
	//$_SESSION['id'] = $_POST['id'];
	//print $_SESSION['id'];
?>
-->

<!--	2.Escrever um outro programa que imprime na tela a frase “O seu número de matrícula é:” e o dado que está no índice ‘id’ do array de sessão. Executar esse programa com e sem inicialização de sessão. Qual a diferença? 

<?php
	//session_start();
	//$_SESSION['id'] = $_POST['id'];
	//print 'O seu número de matrícula é: '.$_SESSION['id'];
?>
-->

<!--	4.Escrever um programa que limpa os dados do array e destrói a sessão (Dica: duas funções fazem isso). -->

<?php
	session_start();
	$_SESSION['id'] = $_POST['id'];
	print 'O seu número de matrícula é: '.$_SESSION['id'];
	session_unset();
	session_destroy();
?>