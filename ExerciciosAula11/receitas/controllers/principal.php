<?php
spl_autoload_register(
	function ($nomeDaClasse) {
		require_once __DIR__.'/../models/'.$nomeDaClasse.'.php';
	}
);
session_start();    
/**
 * ingrediente.php
 *
 * Controller Ingrediente
 *
 * 
 * @author     Marcelo Antiqueira da Silva, Thiago Garcia
 * @copyright  2018 SENAC POA RS
 * @version    1.0
 */

if(!isset($_SESSION['livro'])){

    $_SESSION['livro'] = new Livro();

  if(!isset($_SESSION['ingredientes'])){
        
   $_SESSION['ingredientes'] = array();
        
   } 

}
 
   
  
if(isset($_GET['req']) && $_GET['req'] === 'ver'){
   
   $_SESSION['livro']->imprimeInformacoes();
     
}else{
    require __DIR__.'/../views/menuPrincipal.php';
}

?>