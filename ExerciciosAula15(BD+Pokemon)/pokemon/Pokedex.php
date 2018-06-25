<?php
class Pokedex {
	protected $capturas;

	function __construct() {
		$this->capturas = array();
	}

	public function adicionaPokemon(Captura $captura) {
		array_push($this->capturas, $captura);
	}

	public function limpa() {
		$this->capturas = array();	
	}

	public function getNumeroPokemon() {
		return count($this->capturas);
	}

	public function listaCapturas() {
		if (empty($this->capturas)) {
			print 'Nada foi capturado até o momento.<br/>';
		}
		else {
			print 'Pokédex<br/>';
			print '<ul>';
			foreach ($this->capturas as $key => $captura) {
			?>
				<li><a href="#!" onclick="exibeInfoCaptura(<?=$key?>)">
					<?=$captura->getPokemon()->getImpressaoNumeroENome()?>
				</a></li>
			<?
			}
			print '</ul>';
		}
	}

	public function exibeInfoCaptura($key) {
		$captura = $this->capturas[$key];
		$pokemon = $captura->getPokemon();
		$tipo1 = $pokemon->getTipo1()->getNome();
		$tipo2 = $pokemon->getTipo2();
		if (!empty($tipo2)) {
			$tipo2 = $tipo2->getNome();
		}
		else {
			$tipo2 = 'nenhum';
		}
		?>
		<h3><?=$pokemon->getImpressaoNumeroENome()?></h3>
		Tipo principal: <?=$tipo1?> <br/>
		Tipo secundário: <?=$tipo2?> <br/>
		<?=($captura->getShiny() ? 'É um Pokémon shiny! <br/>' : '')?>
		<br/>
		Sexo <?=($captura->getSexo() == 'M' ? 'masculino' : ($captura->getSexo() == 'F' ? 'feminino' : 'indefinido'))?> <br/>
		Capturado em <?=$captura->getLocal()?> <br/>
		<?php
	}
}?>