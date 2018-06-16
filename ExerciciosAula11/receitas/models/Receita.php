<?php
class Receita implements InterfaceImprimivel{

   protected $nome;
   protected $listaDeIngrediente;
   protected $listaDePassos;

   function __construct() {
   		$this->listaDePassos = array();
   		$this->listaDeIngrediente = array();
   }
   public function setNome($nome){
   		$this->nome = $nome;
   }
   public function getNome(){
   	 return $this->nome;
   }

   public function listaDeIngrediente(){
   		if (empty($this->listaDeIngrediente)){
   			echo 'está vazio';
         }else{
				echo "Ingredientes: <br/>";
            foreach ($this->listaDeIngrediente as $lista => $ingrediente) {
               $ingrediente->imprimeInformacoes();
   				echo '<br/>';
   			}
   		}
   }

   public function adicionaIngredienet(Ingrediente $ingrediente){
   		array_push($this->listaDeIngrediente, $ingrediente);
   }

   public function listaPassos(){
   	   if (empty($this->listaDePassos)){
   			echo 'está vazio';
   		}else{
				echo "Passos: <br/>";
            foreach ($this->listaDePassos as $lista => $passo) {
   				echo '<br/>';
               $passo->imprimeInformacoes();
   			}
   		}
   }

   public function adicionaPassos(PassoReceita $passo){
   		array_push($this->listaDePassos, $passo);
   }

   public function imprimeInformacoes($comQuebraDeLinha = true){
   		echo $this->nome;
   		if($comQuebraDeLinha){
   			echo '<br/>';
   		}
   		$this->listaDeIngrediente();
   		if($comQuebraDeLinha){
   			echo '<br/>';
   		}
   		$this->listaDePassos();
   }

}