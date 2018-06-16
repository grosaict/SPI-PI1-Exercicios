<?php
// Ernesto de Oliveira
// Fabiano Mello
class PassoReceita {
	protected $numero;
	protected $descricao;

	public function getDescricao() {
		return $this->descricao;
	}
	public function getNumero() {
		return $this->numero;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function imprimeInformacoes($comQuebraDeLinha = true) {
		if ($comQuebraDeLinha){ 
			print 'Numero: '.$this->getNumero().'<br/>';
			print 'Descricao: '.$this->getDescricao().'<br/>';
		}
		else
		{
			print 'Numero: '.$this->getNumero().' - Descricao: '.$this->getDescricao();			
		}
	}
}