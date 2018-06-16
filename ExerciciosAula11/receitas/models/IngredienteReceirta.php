<?php
	/* 	Gabriel Senna da Rosa
		Marcelo Camargo Beus
	*/

	class IngredienteReceita implements InterfaceImprimivel {
		protected $ingrediente;
		protected $quantidade;
		protected $unidadeDeMedida;

		public imprimeInformacoes($comQuebraDeLinha = true){
			$this->ingrediente->imprimeInformacoes(false);
			print ' '.$this->quantidade;
			print ' '.$this->unidadeDeMedida;
		}
		
		public function getIngrediente() {
			return $this->ingrediente;
		}

		public function setIngrediente($ingrediente) {
			$this->ingrediente = $ingrediente;
		}

		public function getQuantidade() {
			return $this->quantidade;
		}

		public function setQuantidade($quantidade) {
			$this->quantidade = $quantidade;
		}

		public function getUnidadeDeMedida() {
			return $this->unidadeDeMedida;
		}

		public function setUnidadeDeMedida($unidadeDeMedida) {
			$this->unidadeDeMedida = $unidadeDeMedida;
		}

	}
?>