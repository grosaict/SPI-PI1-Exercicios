<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<!--	1 . Definir as classes:
				• Pessoa
					Atributos $nome e $idade, método construtor que receba esses
				atributos por parâmetro e respectivos métodos get e set
					• Empregado
						Atributo $salario e $dataContrato e respectivos métodos get e set
						• Professor
							Atributo $escolaridade e métodos get e set
						• Funcionario
							Atributo $funcao e métodos get e set
					• Aluno
						Atributos $curso e $dataIngresso e respectivos métodos get e set

				4. Criar uma página PHP que instancie objetos para Aluno, Professor e Funcionario. Invocar o método	oQueFacoNaFaculdade()
				para cada um deles (Obs: não se esqueça de incluir os arquivos que definem as classes - require_once). 	-->

		<?php
			require_once('exe01.2.1.Professor.php');
			require_once('exe01.2.2.Funcionario.php');
			require_once('exe01.3.Aluno.php');

			$aluno = new Aluno('Aluno', 20, 'SPI', '01/03/2018');
			$professor = new Professor('Professor', 35, 5000, '01/03/2000', 'Mestrado');
			$funcionario = new Funcionario('Funcionario', 40, 1000, '01/08/2005', 'Secretaria');

			$aluno->imprimePessoa();
			?><br/><?php
			$aluno->oQueFacoNaFaculdade();
			?><br/><br/><?php

			$professor->imprimePessoa();
			?><br/><?php
			$professor->oQueFacoNaFaculdade();
			?><br/><br/><?php

			$funcionario->imprimePessoa();
			?><br/><?php
			$funcionario->oQueFacoNaFaculdade();


		?>

	</body>
</html>