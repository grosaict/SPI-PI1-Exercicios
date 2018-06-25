<?php
class Tipo {
	protected $nome, $fraquezas, $vantagens;

	public function getNome() {
		return $this->nome;
	}
	public function getFraquezas() {
		return $this->fraquezas;
	}
	public function getVantagens() {
		return $this->vantagens;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function setFraquezas($fraquezas) {
		$this->fraquezas = $fraquezas;
	}
	public function setVantagens($vantagens) {
		$this->vantagens = $vantagens;
	}
}