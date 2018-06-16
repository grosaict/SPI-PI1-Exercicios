<?php
	session_start();
	session_unset();
	session_destroy();
	print ("Já eras!!!");
	?>
		<br/><a href="../index.php">Voltar</a>
	<?php
?>