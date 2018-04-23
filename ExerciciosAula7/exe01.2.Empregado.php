<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<!--	Definir as classes:
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
						Atributos $curso e $dataIngresso e respectivos métodos get e set 	-->

		<?php
			require_once('exe01.1.Pessoa.php');

			class Empregado extends Pessoa {
				protected $salario;
				protected $dataContrato;

				public function __construct($nome, $idade, $salario, $dataContrato){
					parent::__construct($nome, $idade);
					$this->salario = $salario;
					$this->dataContrato = $dataContrato;
				}

				public function setSalario($salario){
					$this->salario = $salario;
				}

				public function setDataContrato($dataContrato){
					$this->dataContrato = $dataContrato;
				}

				public function getSalario() {
        			return $this->salario;
    			}

    			public function getDataContrato() {
        			return $this->dataContrato;
    			}
			}
		?>

	</body>
</html>