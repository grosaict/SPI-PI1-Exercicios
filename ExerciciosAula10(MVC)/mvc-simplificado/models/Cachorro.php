<?php
class Cachorro {
	protected $nome;
	protected $raca;

	public function getNome() {
		return $this->nome;
	}
	public function getRaca() {
		return $this->raca;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function setRaca($raca) {
		$this->raca = $raca;
	}
	public function latir() {
		print 'AU! AU! <br/>';
	}
	public function rosnar() {
		print 'GRRRRR! <br/>';
	}
	public function passear() {
		print $this->getNome().' está passeando... <br/>';
		for ($i = 0; $i < 10; $i++) { 
			// produz um inteiro aleatório entre 0 e 1
			$teste = rand(0, 1);
			if ($teste == 0) {
				$this->latir();
			}
			else {
				$this->rosnar();
			}
		}
	}
	public function imprimeDados() {
		print 'Nome: '.$this->getNome().'<br/>';
		print 'Raça: '.$this->getRaca().'<br/>';
	}
}