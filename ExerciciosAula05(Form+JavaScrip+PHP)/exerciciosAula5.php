<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php
			$nome		= $_POST['nome'];
			$sexo		= $_POST['sexo'];
			$curso		= $_POST['curso'];
			$declaracao	= $_POST['declaracao'];

			print 'Aluno(a): '.$nome.'</br>Sexo: '.$sexo.'<br/>Curso: ';
			switch($curso){
				case 1:
					print 'Análise e Desenvolvimento de Sistemas';
					break;
				case 2:
					print 'Redes de Computadores';
					break;
				case 3:
					print 'Sistemas para Internet';
					break;
				default:
					print 'Não informado';
			}
			if ($declaracao == 01){
				print '<br/>Declarou que é aluno(a)!!!';
			}
		?>
	</body>
</html>