<?php
	class Pokemon {
		protected $nro;
		protected $nome;
		protected $tipo1;
		protected $tipo2;

		public function setNro($nro){
			$this->nro = $nro;
		}

		public function getNro() {
			return $this->nro;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setTipo1($tipo1){
			$this->tipo1 = $tipo1;
		}

		public function getTipo1() {
			return $this->tipo1;
		}

		public function setTipo2($tipo2){
			$this->tipo2 = $tipo2;
		}

		public function getTipo2() {
			return $this->tipo2;
		}
	}
?>