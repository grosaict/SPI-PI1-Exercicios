<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>

	<body>
		<section id="ex2">
			<!--	2. Escrever um programa que, dado um array bidimensional que armazena o nome e o salário de um funcionário, imprime as informações desse array. -->
			<?php
				print '<strong>EXERCICIO 02</strong> - Cria Array<br/><br/>';

				$funcionarios = array();
				$funcionarios[] = array('nome' => 'João',	'salario' => 1457.00);
				$funcionarios[] = array('nome' => 'Maria',	'salario' => 1100.00);
				$funcionarios[] = array('nome' => 'Boss',	'salario' => 10000.00);

				funcaoImprimeArray($funcionarios);
			?>

		</section>

		<section id="ex3">
			<!--	3. Sobre o array do exercício anterior, escreva uma rotina que aumenta em 10% os salários dos funcionários e imprime a lista novamente. -->
			<?php
				print '<br/><strong>EXERCICIO 03</strong> - Aumenta Salário<br/><br/>';

				$funcionarios = funcaoAumentaSalario($funcionarios);

				funcaoImprimeArray($funcionarios);
			?>

		</section>

		<section id="ex4">
			<!--	4. Transformar as rotinas de impressão de dados e de aumento de salário dos exercícios anteriores em subrotinas. -->
			<?php
				print '<br/><strong>EXERCICIO 04</strong> - Rotinas que apresentam os resultados 02 e 03<br/><br/>';
				print 'Vide exercícios 02 e 03!!!<br/>';

				function funcaoAumentaSalario($funcionarios) {
					foreach ($funcionarios as $indice => $conteudoAtual) {
						$conteudoAtual['salario'] = $conteudoAtual['salario'] * 1.1;
						$funcionarios[$indice] = $conteudoAtual;
					}
					return $funcionarios;
				}

				function funcaoImprimeArray($funcionarios) {
					foreach ($funcionarios as $indice => $conteudoAtual) {
						print '['.$indice.'] ';
						print $conteudoAtual['nome'].' - R$ ';
						print number_format($conteudoAtual['salario'], 2, ',', '.').'<br/>';
					}
				}
			?>

		</section>

		<section id="ex5">
			<!--	5. Escrever um programa que, dada uma string, verifica se essa string é um palíndromo. (Dica: retire os espaços da string) -->
			<?php
				print '<br/><strong>EXERCICIO 05</strong> - Testa palíndromo<br/><br/>';

				$str = 'SUBI NO ONIBUS';

				print 'A frase informada foi <strong>'.$str.'</strong> com '.strlen($str).' caracteres!!!<br/>';

				$str = str_replace(' ', '', $str);

				print 'Retirando os espaços fica: <strong>'.$str.'</strong>!!!<br/>';

				$j = strlen($str) - 1;
				$msg = 'A frase é um palíndromo!!!';
				for ($i = 0; $i < (strlen($str)/2); $i++) {
					if ($str[$i] == $str[$j]){
						$j--;
					}else{
						$i = strlen($str)/2;
						$msg = 'A frase não é um palíndromo!!!';
					}
				}
				print ($msg);
			?>
		</section>
	</body>
</html>