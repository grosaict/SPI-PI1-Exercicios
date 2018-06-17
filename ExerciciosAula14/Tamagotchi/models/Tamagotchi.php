<?php
class Tamagotchi {
	protected $idade;
	protected $fome;
	protected $afeto;
	protected $diversao;
	protected $defecou;

	public function getIdade() {
		return $this->idade;
	}
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	public function getFome() {
		return $this->fome;
	}
	public function setFome($fome) {
		$this->fome = $fome;
	}
	public function getAfeto() {
		return $this->afeto;
	}
	public function setAfeto($afeto) {
		$this->afeto = $afeto;
	}
	public function getDiversao() {
		return $this->diversao;
	}
	public function setDiversao($diversao) {
		$this->diversao = $diversao;
	}
	public function alimentar() {
		if (!$this->estaMorto()){
			print 'Tamagotchi comeu! Nham nham! <br/>';
			$this->fome += 2;
		}
	}
	public function fazerCarinho() {
		if (!$this->estaMorto()){
			print 'Tamagotchi gostou do carinho!<br/>';
			$this->afeto += 2;
		}
	}
	public function brincar() {
		if (!$this->estaMorto()){
			print 'Tamagotchi se divertiu muito!<br/>';
			$this->diversao += 2;
		}
	}
	public function limpar() {
		if (!$this->estaMorto()){
			if ($this->defecou) {
				print 'Tudo está mais limpo agora!<br/>';
				$this->afeto += 1;
				$this->diversao += 1;
				$this->defecou = false;
			}else{
				print 'Estava tudo em dia!<br/>';
			}
		}
	}
	public function defecar() {
		if (!$this->estaMorto()){
			print 'Ups! Cocô na área!<br/>';
			$this->fome -= 1;
			$this->afeto -= 1;
			$this->diversao -= 1;
			$this->defecou = true;
		}
	}
	public function viver() {
		if (!$this->estaMorto()){
			$this->fome -= 1;
			$numeroVezes = 1;
			if ($this->defecou) {
				$numeroVezes = 2;
			}
			for ($i = 0; $i < $numeroVezes; $i++) {
				$rand = rand(0, 1); // retorna 0 ou 1
				if ($rand == 0) {
					$this->afeto -= 1;
				}
				else {
					$this->diversao -= 1;
				}
			}
			$rand = rand(0, 3);
			if ($rand == 0) {
				$this->defecar();
			}
		}
	}
	public function estaMorto(){
		if ($this->fome <= 0 || $this->afeto <= -10 || $this->diversao <= -20) {
			print("O Tamagotchi está morto!!!</br>");
			return true;
		}else{
			return false;
		}
	}
}