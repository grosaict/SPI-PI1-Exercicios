<?php 

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

spl_autoload_register(
  function ($nomeDaClasse) {
    require_once __DIR__.'/../models/'.$nomeDaClasse.'.php';
  }
);
session_start();

if(!isset($_SESSION['ingredientes'])){
       
    $_SESSION['ingredientes'] = array();
  }
//tipo de acesso
 //$_GET['req'] = 'novo';

 //dados do formulário
 //$_POST['ingredientes_lista'] = array('tomate cereja', 'cebola roxa','pimentão verde', 'alho poró');
    
//  $_SESSION['ingredientes'] = array('tomate', 'cebola','pimentão', 'alho');
//verifica se a $_SESSION está setada;
// $ingredientes = $_SESSION['ingredientes'];
if(isset($_GET['req']) && $_GET['req'] === 'ver'){
    $ordem = 1; 
       print "A lista de ingredientes é: <br>";
       foreach($_SESSION['ingredientes'] as $ingrediente){
          print $ordem.': ';
          $ingrediente->imprimeInformacoes();
           $ordem++;
       }

        // se a opção do menu é nova lista de ingredientes;    
}elseif(isset($_GET['req']) && $_GET['req'] === 'novo') {
          
    if (isset($_POST['nome'])) {
      $ingrediente = new Ingrediente();
      $ingrediente->setNome($_POST['nome']);
      $ingrediente->setCalorias($_POST['calorias']);
      $_SESSION['ingredientes'][] = $ingrediente;
    }
    else {
      require __DIR__.'\..\views\formIngrediente.php';
    }
 
}else{
    
    require __DIR__.'\..\views\menuIngrediente.php';

}
     
 
?>