<?php
class Funcionario extends Empregado {
	protected $funcao;

	public function getFuncao() {
		return $this->funcao;
	}

	public function setFuncao($funcao) {
		$this->funcao = $funcao;
	}
}