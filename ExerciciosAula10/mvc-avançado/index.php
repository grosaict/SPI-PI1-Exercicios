<?php
spl_autoload_register(function ($class_name) {
	try {
    	require_once __DIR__.'/controllers/'.$class_name.'.php';
    }
    catch (Exception $e) {
    	try {
	    	require_once __DIR__.'/models/'.$class_name.'.php';
	    }
	    catch (Exception $e) {
	    	print $e->getMessage();
	    }
    }
});

if (isset($_GET['r'])) {
	$requisicao = explode("/", $_GET['r']);
	if (is_array($requisicao) && (count($requisicao) == 2)) {
		$nomeControlador = ucfirst($requisicao[0]);
		$acao = $requisicao[1];
		eval('$controlador = new '.$nomeControlador.'Controller();');
		eval('$controlador->'.$acao.'();');
	}
	else {
		print 'Não entendi o que fazer.';
	}
}
else {
	print 'Não sei o que fazer.';
}