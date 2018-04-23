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
			require_once('exe01.2.Empregado.php');

			class Funcionario extends Empregado{
				protected $funcao;

				public function __construct($nome, $idade, $salario, $dataContrato, $funcao){
					parent::__construct($nome, $idade, $salario, $dataContrato);
					$this->funcao = $funcao;
				}

				public function setEscolaridade($funcao){
					$this->funcao = $funcao;
				}

    			public function getFuncao() {
        			return $this->funcao;
    			}
			}
		?>

	</body>
</html>