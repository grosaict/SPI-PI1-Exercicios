<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<!--	1. Escrever um programa que, dado um número, verifica se ele é primo ou não (um número primo é aquele que
		só pode ser dividido por 1 e por ele mesmo). -->
				
		<?php
			function ex1(){
				$nro = 56465069;
				$divNro = $nro%$nro;
				$divUm = $nro%1;
				$divQquer;
				print 'O número informado é: '.$nro;
				for ($i=2; $i < ($nro/2) ; $i++) { 
					$divQquer = $nro%$i;
					//print '<br/>'.$i.' - '.$divQquer;
					if ($divQquer == 0) {
						$i = $nro;
					}
				}
				if ($divNro == 0 && $divUm == 0 && $divQquer != 0) {
					print '<br/>E ele é um nro primo!!!';
				}else{
					print '<br/>E ele não é um nro primo!!!';
				}
			}
		?>

		<!--	2. Criar um programa que, dado um array de 2 dimensões (matriz), imprime os valores do array na tela, no
				formato de tabela.-->
		<?php
			function ex2(){
				$funcionarios = array();
				$funcionarios[] = array('nome' => 'João',	'salario' => 1457.00);
				$funcionarios[] = array('nome' => 'Maria',	'salario' => 1100.00);
				$funcionarios[] = array('nome' => 'Boss',	'salario' => 10000.00);
				funcaoImprimeArray($funcionarios);
			}

			function funcaoImprimeArray($funcionarios) {
				?>
				<table border=1>
						<thead>
							<tr>
								<th>#</th>
								<th>Nome</th>
								<th>Salário</th>
							</tr>
						</thead>
						<tbody>
				<?php
				foreach ($funcionarios as $indice => $conteudoAtual){
				?>
							<tr>
								<td><?= $indice ?></td>
								<td><?= $conteudoAtual['nome'] ?></td>
								<td><?= 'R$ '.number_format($conteudoAtual['salario'], 2, ',', '.') ?></td>
							</tr>
				<?php
					//print '['.$indice.'] ';
					//print $conteudoAtual['nome'].' - R$ ';
					//print number_format($conteudoAtual['salario'], 2, ',', '.').'<br/>';
				}
				?>
						</tbody>
					</table>
				<?php
			}
		?>

		<!--	3. Criar um programa que, dado um número X, imprime X vezes uma imagem que você escolher.-->
		<?php
			function ex3(){
				$ciclos = 288;
				for ($i=0; $i < $ciclos ; $i++) { 
					?>
						<img src="download.png" alt="imagem" title="imagem" height="60">
					<?php
				}
			}
		?>

		<!--	4. Criar um programa que, dado um número um entre 1 e 12, imprime o mês correspondente. Se o número não
				for entre 1 e 12, imprimir que não existe mês com este número.-->
		<?php
			function ex4(){
				$mes = 13;
				switch ($mes) {
					case '1':
						print 'O mês informado foi Janeiro';
						break;
					case '2':
						print 'O mês informado foi Fevereiro';
						break;
					case '3':
						print 'O mês informado foi Março';
						break;
					case '4':
						print 'O mês informado foi Abril';
						break;
					case '5':
						print 'O mês informado foi Maio';
						break;
					case '6':
						print 'O mês informado foi Junho';
						break;
					case '7':
						print 'O mês informado foi Julho';
						break;
					case '8':
						print 'O mês informado foi Agosto';
						break;
					case '9':
						print 'O mês informado foi Setembro';
						break;
					case '10':
						print 'O mês informado foi Outubro';
						break;
					case '11':
						print 'O mês informado foi Novembro';
						break;
					case '12':
						print 'O mês informado foi Dezembro';
						break;
					default:
						print 'O valor informado é inválido';
						break;
				}
			}
		?>

		<!--	5. Criar um programa que, dada uma string e um caracter de busca, imprime o número de ocorrências deste
				caracter dentro da string.-->
		<?php
			function ex5(){
				$string = 'JHGBVHBEJLVHBAELVBL BVLHABS ASDVASDGAV';
				$caracter = 'B';
				$ocorrencias = 0;
				for ($i=0; $i < strlen($string) ; $i++) { 
					if ($string[$i] == $caracter){
						$ocorrencias++;
					}
				}
				print 'A string informada foi '.$string.' e o caracter procurado foi o '.$caracter;
				if ($ocorrencias == 0) {
					print '<br/>Não foi encontrada nenhuma ocorrência de '.$caracter;
				}else{
					print '<br/>Foram encontradas '.$ocorrencias.' ocorrência de '.$caracter;
				}
			}
		?>

		<?php
			ex5();
		?>
	</body>
</html>