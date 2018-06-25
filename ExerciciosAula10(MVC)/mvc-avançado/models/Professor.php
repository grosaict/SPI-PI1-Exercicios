<?php
class Professor extends Empregado {
	protected $escolaridade;

	public function getEscolaridade() {
		return $this->escolaridade;
	}
	
	public function setEscolaridade($escolaridade) {
		$this->escolaridade = $escolaridade;
	}
}