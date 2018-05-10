<?php
class Cachorro {
	protected $nome;
	protected $raca;

	public function latir() {
		print 'AU AU! <br/>';
	}	
	public function rosnar() {
		print 'GRRRR! <br/>';
	}
	public function passear() {
		print $this->getNome().' está passeando! <br/>';

		for ($i = 0; $i < 10; $i++) {
			$inteiro = rand(0, 1);
			if ($inteiro == 0) {
				$this->latir();
			}
			else {
				$this->rosnar();
			}
		}
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getRaca() {
		return $this->raca;
	}
	public function setRaca($raca) {
		$this->raca = $raca;
	}

}