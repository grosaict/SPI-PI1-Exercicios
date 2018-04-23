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
						Atributo $curso e $dataIngresso e respectivos métodos get e set
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
			require_once('exe01.1.Pessoa.php');

			class Aluno extends Pessoa{
				protected $curso;
				protected $dataIngresso;

				public function __construct($nome, $idade, $curso, $dataIngresso){
					parent::__construct($nome, $idade);
					$this->curso = $curso;
					$this->dataIngresso = $dataIngresso;
				}

				public function oQueFacoNaFaculdade(){
					print 'Eu estudo na faculdade';
				}

				public function setCurso($curso){
					$this->curso = $curso;
				}

				public function setDataIngresso($dataIngresso){
					$this->dataIngresso = $dataIngresso;
				}

				public function getCurso() {
        			return $this->curso;
    			}

    			public function getDataIngresso() {
        			return $this->dataIngresso;
    			}
			}
		?>

	</body>
</html>