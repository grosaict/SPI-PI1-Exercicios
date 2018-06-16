<?php
//Controller que verifica se está criado na sessão o livro / lista de ingredientes / verifica em qual passoe está a receita e os ingredientes até finalizar.
//Chamando classes para controler.
//Starntando uma session.

spl_autoload_register(
	function ($nomeDaClasse) {
		require_once __DIR__.'/../models/'.$nomeDaClasse.'.php';
	}
);
session_start();

	//Se nao tenha session do livro faça uma.
	if (!isset($_SESSION['livro'])){
		$livro = new Livro();
		$_SESSION['livro'] = $livro;
	}
	//Se nao tenha session dos ingredientes faz um array vazio.
	if (!isset($_SESSION['ingredientes'])) {
	 	$arrayIngredientes = array();
	}
	//Se a requisição for igual a novo irá criar uma nova receita para popular e ir para o menu se nao volta para o menu receita
	if (isset($_GET['req']) and $_GET['req'] == 'novo') {
		$receita = new Receita();
		$_SESSION['temp'] = $receita;
		require_once __DIR__.'/../views/menuIncluirReceita.php';
	//Se a requisição for igual a novoIngrediente ele cria um IngredienteReceita seta e depois adiciona na session temp se nao volta para o form de ingrediente receita
	}else if (isset($_GET['req']) and $_GET['req'] == 'novoIngrediente') {
		if (isset($_SESSION['ingredientes'][$_POST['ingrediente']])) {
			$ingredienteReceita = new IngredienteReceita();
			$ingredienteReceita->setIngrediente($_SESSION['ingredientes'][$_POST['ingrediente']]);
			$ingredienteReceita->setQuantidade($_POST['quantidade']);
			$_SESSION['temp']->adicionaIngrediente($ingredienteReceita);			
		}else{
			require_once __DIR__.'/../views/formIngredienteReceita.php';
		}
	//Se a requisição for igual a novoPasso cria uma novo passo da receita recebe o que vir do post passo e coloca no session temp se nao vai para o form passo receita
	}else if (isset($_GET['req']) and $_GET['req'] == 'novoPasso') {
		if (isset($_POST['numero'])) {
			$passoReceita = new PassoReceita();
			$passoReceita->setNumero($_POST['numero']);
			$passoReceita->setPasso($_POST['passo']);
			$_SESSION['temp']->adicionaPasso($passoReceita);
		}else{
			require_once __DIR__.'/../views/formPassoReceita.php';
		}
	//Se a requisição for igual a finalizar cria e o post for populado coloca o nome na session temp e edpois adiciona na receita na session livro se nao volta para form finaliza receitas
	}else if (isset($_GET['req']) and $_GET['req'] == 'finalizar') {
		if (isset($_POST['nome'])) {
			$_SESSION['temp']->setNome($_POST['nome']);
			$_SESSION['livro']->adicionaReceita($_SESSION['temp']);
			require_once __DIR__.'/../controller/principal.php';
		}else{
			require_once __DIR__.'/../views/formFinalizarReceita.php';
		}
	}else{
		require_once __DIR__.'/../views/menuReceita.php';
	}
