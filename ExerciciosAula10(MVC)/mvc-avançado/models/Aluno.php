<?php
class Aluno extends Pessoa {
	protected $curso;
	protected $dataIngresso;

	public function getCurso() {
		return $this->curso;
	}

	public function setCurso($curso) {
		$this->curso = $curso;
	}

	public function getDataIngresso() {
		return $this->dataIngresso;
	}

	public function setDataIngresso($dataIngresso) {
		$this->dataIngresso = $dataIngresso;
	}

	public function oQueFacoNaFaculdade() {
		print "Eu estudo na faculdade. <br/>";
	}
}