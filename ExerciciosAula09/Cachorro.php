<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<!--	1. Criar uma classe Cachorro, com os atributos que achar necessário (ex: nome, raça, idade, etc.) e os métodos latir(),
				rosnar() e passear(), além dos getters e setters. O método latir() deve imprimir na tela “AU AU”; o método rosnar() deve
				imprimir na tela “GRRRR”; e o método passear() deve imprimir “<NomeCachorro> está passeando...” e chamar aleatoriamente
				os métodos latir() e rosnar() por 10 vezes (no total). 	-->

		<?php
		if (isset($_POST['nome'])) {
			$cachorro = new Cachorro();
			$cachorro->nascer();
			$cachorro->imprimeCachorro();
		}

			class Cachorro {
				protected $nome;
				protected $raca;
				protected $nasc;

				public function nascer(){
					$this->setNome($_POST['nome']);
					$this->setRaca($_POST['raca']);
					$this->setNasc($_POST['nasc']);
				}

				public function imprimeCachorro(){
					print 'Nome: '.$this->nome;?><br/><?php
					print 'Raça: '.$this->raca;?><br/><?php
					print 'Nasc: '.$this->nasc;?><br/><?php
				}

				public function latir(){
					print 'AU AU';?><br/><?php
				}

				public function rosnar(){
					print 'GRRRR';?><br/><?php
				}

				public function passear(){
					print ''.$this->nome.' está passeando...';?><br/><?php
					for ($i = 0; $i < 10; $i++) {
						$chamar = rand(0, 1);
						if ($chamar == 0){
							$this->latir();
						}elseif ($chamar == 1) {
							$this->rosnar();
						}
					}
				}

				public function setNome($nome){
					$this->nome = $nome;
				}

				public function getNome() {
        			return $this->nome;
    			}

   				public function setRaca($raca){
					$this->raca = $raca;
				}

    			public function getRaca() {
        			return $this->raca;
    			}

    			public function setNasc($nasc){
					$this->nasc = $nasc;
				}

    			public function getNasc() {
        			return $this->nasc;
    			}
			}
		?>
	</body>
</html>