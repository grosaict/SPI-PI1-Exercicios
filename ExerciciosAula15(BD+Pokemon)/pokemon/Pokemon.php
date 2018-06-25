<?php
class Pokemon {
	protected $numero, $nome, $tipo1, $tipo2;

	public function getNumero() {
		return $this->numero;
	}
	public function getNome() {
		return $this->nome;
	}
	public function getTipo1() {
		return $this->tipo1;
	}
	public function getTipo2() {
		return $this->tipo2;
	}
	public function setNumero($numero) {
		$this->numero = $numero;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function setTipo1(Tipo $tipo) {
		$this->tipo1 = $tipo;
	}
	public function setTipo2(Tipo $tipo) {
		$this->tipo2 = $tipo;
	}
	public function getImpressaoNumeroENome() {
		return '#'.$this->getNumero().' - '.$this->getNome();
	}

}