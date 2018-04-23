<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<!--	1. Definir as classes:
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

				2. Incluir na classe Pessoa o método oQueFacoNaFaculdade()
					• Esse método deve imprimir “Eu trabalho na faculdade”
					• Sobrescrever o método na classe Aluno, para que ele imprima “Eu estudo na faculdade” 	-->

		<?php
			class Pessoa {
				protected $nome;
				protected $idade;

				public function __construct($nome, $idade){
					$this->nome = $nome;
					$this->idade = $idade;
				}

				public function imprimePessoa(){
					print 'Nome: '.$this->nome.'   '.$this->idade.' anos';
				}

				public function oQueFacoNaFaculdade(){
					print 'Eu trabalho na faculdade';
				}

				public function setNome($nome){
					$this->nome = $nome;
				}

				public function setIdade($idade){
					$this->idade = $idade;
				}

				public function getNome() {
        			return $this->nome;
    			}

    			public function getIdade() {
        			return $this->idade;
    			}
			}
		?>

	</body>
</html>