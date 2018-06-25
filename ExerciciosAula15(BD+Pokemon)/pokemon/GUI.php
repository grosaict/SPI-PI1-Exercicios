<?php
final class GUI {
	public static function menuInicial() {
	?>
		<ul>
			<li><a href="index.php?r=tipo">Inserir tipo</a></li>
			<li><a href="index.php?r=pokemon">Inserir pokémon</a></li>
			<li><a href="index.php?r=captura">Capturar pokémon</a></li>
			<li><a href="index.php?r=pokedex">Listar pokédex</a></li>
			<li><a href="index.php?r=apaga">Apagar pokédex</a></li>
		</ul>
	<?
	}

	public static function formTipo() {
		global $conexao;
		if (isset($_POST['nome'], $_POST['fraquezas'], $_POST['vantagens'])) {
			$tipo = new Tipo();
			$tipo->setNome($_POST['nome']);
			$tipo->setFraquezas($_POST['fraquezas']);
			$tipo->setVantagens($_POST['vantagens']);
			// inserir no BD
			$sql = "INSERT INTO tipo
						(nome, fraquezas, vantagens)
					VALUES
						(:nome, :fraq, :vant)";
			$query = $conexao->prepare($sql);
			$query->execute(array(
				':nome' => $tipo->getNome(),
				':fraq' => $tipo->getFraquezas(),
				':vant' => $tipo->getVantagens()
			));
			print 'Tipo incluído com sucesso!<br/>';
			self::linkVoltar();
		}
		else {
		?>
			<form action="index.php?r=tipo" method="post">
				<label for="nome">Nome:</label> <br/>
				<input type="text" name="nome" id="nome" size="50"/> <br/>
				<label for="vantagens">Vantagens:</label> <br/>
				<input type="text" name="vantagens" id="vantagens" size="50"/> <br/>
				<label for="fraquezas">Fraquezas:</label> <br/>
				<input type="text" name="fraquezas" id="fraquezas" size="50"/> <br/>
				<input type="submit" value="Salvar tipo"/>
			</form>
		<?
			self::linkVoltar();
		}
	}

	public static function formPokemon() {
		global $conexao;
		if (isset($_POST['numero'], $_POST['nome'], $_POST['tipo1'], $_POST['tipo2'])) {
			$pokemon = new Pokemon();
			$pokemon->setNumero($_POST['numero']);
			$pokemon->setNome($_POST['nome']);
			$pokemon->setTipo1($_SESSION['tipos'][ $_POST['tipo1'] ]);
			if (trim($_POST['tipo2']) != '') {
				$pokemon->setTipo2($_SESSION['tipos'][ $_POST['tipo2'] ]);
			}
			$_SESSION['pokemon'][ $_POST['numero'] ] = $pokemon;
			print 'Pokémon incluído com sucesso!<br/>';
			self::linkVoltar();
		}
		else {
		?>
			<form action="index.php?r=pokemon" method="post">
				<label for="numero">Número:</label> <br/>
				<input type="text" name="numero" id="numero" size="3"/> <br/>
				<label for="nome">Nome:</label> <br/>
				<input type="text" name="nome" id="nome" size="50"/> <br/>
				<label for="tipo1">Tipo Principal:</label> <br/>
				<select name="tipo1" id="tipo1">
				<? 	
					$sql = "SELECT id_tipo, nome FROM tipo";
					$resultset = $conexao->query($sql);
					$resultarray = $resultset->fetchAll();
					foreach ($resultarray as $tipo): ?>
						<option value="<?=$tipo['id_tipo']?>">
							<?=$tipo['nome']?>
						</option>
					<? endforeach; ?>
				</select> <br/>
				<label for="tipo2">Tipo Secundário:</label> <br/>
				<select name="tipo2" id="tipo2">
					<option value=""> ------------- </option>
					<? foreach ($resultarray as $tipo): ?>
						<option value="<?=$tipo['id_tipo']?>">
							<?=$tipo['nome']?>
						</option>
					<? endforeach; ?>
				</select> <br/>
				<input type="submit" value="Salvar Pokémon"/>
			</form>
		<?
			self::linkVoltar();
		}
	}

	public static function formCaptura() {
		if (isset($_POST['pokemon'], $_POST['sexo'], $_POST['local'])) {
			$captura = new Captura();
			$captura->setPokemon($_SESSION['pokemon'][ $_POST['pokemon'] ]);
			$captura->setSexo($_POST['sexo']);
			$captura->setLocal($_POST['local']);
			$captura->setShiny(isset($_POST['shiny']));	
			
			$_SESSION['pokedex']->adicionaPokemon($captura);
			print 'Pokémon capturado com sucesso!<br/>';
			self::linkVoltar();
		}
		else {
		?>
			<form action="index.php?r=captura" method="post">
				<label for="pokemon">Pokémon:</label> <br/>
				<select name="pokemon" id="pokemon">
					<? foreach ($_SESSION['pokemon'] as $key => $pokemon): ?>
						<option value="<?=$key?>"><?=$key.' - '.$pokemon->getNome()?></option>
					<? endforeach; ?>
				</select> <br/>
				<label for="local">Local de encontro:</label> <br/>
				<input type="text" name="local" id="local" size="50"/> <br/>
				<label for="sexo">Sexo:</label> <br/>
				<input type="radio" name="sexo" id="sexoM" value="M"/> 
				<label for="sexoM">Masculino</label> &nbsp;
				<input type="radio" name="sexo" id="sexoF" value="F"/> 
				<label for="sexoF">Feminino</label> &nbsp;
				<input type="radio" name="sexo" id="sexoI" value="I"/> 
				<label for="sexoI">Indefinido</label> <br/>
				<input type="checkbox" name="shiny" id="shiny" value="S"/> 
				<label for="shiny">É shiny, que sorte!</label> <br/>
				<input type="submit" value="Capturar Pokémon"/>
			</form>
		<?
			self::linkVoltar();
		}
	}

	public static function listaPokedex() {
		$_SESSION['pokedex']->listaCapturas();
		self::linkVoltar();
	}

	public static function apagaPokedex() {
		if (isset($_POST['decisao']) && ($_POST['decisao'] == 'S')) {
			$numeroPokemon = $_SESSION['pokedex']->getNumeroPokemon();
			$_SESSION['pokedex']->limpa();
			print "Pokédex apagada com sucesso! $numeroPokemon pokémon liberados.<br/>";
			self::linkVoltar();
		}
		else {
		?>
			<form action="index.php?r=apaga" method="post">
				<label for="decisao">Tem certeza que deseja excluir <strong>todos</strong> os Pokémon da Pokédex?</label> <br/>
				<input type="radio" name="decisao" id="decisaoN" value="N"/> 
				<label for="decisaoN">NÃO, quero manter minha Pokédex</label> &nbsp;
				<input type="radio" name="decisao" id="decisaoS" value="S"/> 
				<label for="decisaoS">Sim</label> <br/>
				<input type="submit" value="Apagar"/>
			</form>
		<?
			self::linkVoltar();
		}
	}

	public static function linkVoltar() {
		print '<a href="index.php">Voltar</a>';
	}
}