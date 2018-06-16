<?php
class Pessoa {
	protected $nome;
	protected $idade;

	function __construct($nome = '', $idade = '') {
		$this->setNome($nome);
		$this->setIdade($idade);
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getIdade() {
		return $this->idade;
	}

	public function setIdade($idade) {
		$this->idade = $idade;
	}

	public function oQueFacoNaFaculdade() {
		print "Eu trabalho na faculdade. <br/>";
	}
}
