<?php
class Captura {
	protected $pokemon, $sexo, $local, $shiny;

	public function getPokemon() {
		return $this->pokemon;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function getLocal() {
		return $this->local;
	}
	public function getShiny() {
		return $this->shiny;
	}
	public function setPokemon(Pokemon $pokemon) {
		$this->pokemon = $pokemon;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}
	public function setLocal($local) {
		$this->local = $local;
	}
	public function setShiny($shiny) {
		$this->shiny = $shiny;
	}
}