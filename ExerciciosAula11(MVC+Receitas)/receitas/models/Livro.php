<?php
// Diego e Henrique
class Livro implements InterfaceImprimivel{
	protected $nome;
	protected $listaDeReceitas;

	function __construct(){
	  $listaDeReceitas = array();
	}
	public function getNome(){
		return $this ->nome;
	}
	public function setNome($nome){
		 $this ->nome = $nome;
	}

	public function listaReceitas(){
		if(!empty($this->listaDeReceitas)){
			foreach ($listaDeReceitas as $receita) {
				$receita->imprimeInformacoes();
			}
		} else{ 
			print "Não existem receitas";
		}
	}

	public function adicionaReceita(Receita $receita){
		array_push($this->listaDeReceitas, $receita);
	}

	public function imprimeInformacoes($comQuebraDeLinha = true) {
		print $this->getNome(); 
		if ($comQuebraDeLinha) {
			print '<br/>';
		}
		$this->listaReceitas();

	}

}