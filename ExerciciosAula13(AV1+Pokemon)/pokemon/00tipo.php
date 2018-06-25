<?php
	class tipoPokemon {
		protected $tipo;
		protected $fraquezas;
		protected $vantagens;

		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function getTipo() {
			return $this->tipo;
		}

		public function setFraquezas($fraquezas){
			$this->fraquezas = $fraquezas;
		}

		public function getFraquezas() {
			return $this->fraquezas;
		}

		public function setVantagens($vantagens){
			$this->vantagens = $vantagens;
		}

		public function getVantagens() {
			return $this->vantagens;
		}
	}
?>