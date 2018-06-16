
<?php
	class Ingrediente implements InterfaceImprimivel{

		//Alex Martins, Jonathan Antunes
		
		protected $nome;
		protected $calorias;

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setCalorias($calorias){
			$this->calorias = $calorias;
		}
		public function getCalorias(){
			return $this->calorias;
		}
		public function imprimeInformacoes($comQuebraDeLinha = true){
			if ($comQuebraDeLinha = true) {
				print $this->nome.'('.$this->calorias.')</br>';
			}
			else{
				print $this->nome .'('.$this->calorias.')';
			} 
		}			
	}