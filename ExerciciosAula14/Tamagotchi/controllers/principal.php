<?php
spl_autoload_register(
	function ($nomeDaClasse) {
		require_once __DIR__.'/../controllers/'.$nomeDaClasse.'.php';
	}
);
session_start();
if(!isset($_SESSION['tamagotchi'])){
	require __DIR__.'/../views/formTamagotchi.php';
}else{
	$tamagotchi = $_SESSION['tamagotchi'];
	$tamagotchi->imprimeTamagotchi();
	?>
		<br/><a href="controllers/eliminaTamagotchi.php">Eliminar o Bicho</a>
		<br/><a href="index.php">Voltar</a>
	<?php
}
?>