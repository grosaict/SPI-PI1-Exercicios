<?php
class Empregado extends Pessoa {
	protected $salario;
	protected $dataContrato;

	public function getSalario() {
		return $this->salario;
	}

	public function setSalario($salario) {
		$this->salario = $salario;
	}

	public function getDataContrato() {
		return $this->dataContrato;
	}

	public function setDataContrato($dataContrato) {
		$this->dataContrato = $dataContrato;
	}
}