<?php
	session_start();
	if (!isset($_SESSION['id']) && isset($_POST['log'])) {
		$_SESSION['id'] = $_POST['log'];
	}
	if (isset($_POST['logoff'])){
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8"/>
	<title>Pratica do uso de Sessao e php</title>
	<link rel="stylesheet" type="text/css" href="praticaSessaoPHPAula6.css"/>
</head>
<body>
	<header>
		<h1>Pratica do uso de Sessao e php</h1>
		<nav>
			<ul>
				<?php if (!isset($_SESSION['id'])) { ?>
				<li>
					<a class="ativo" href="#" 
						onclick="mudaSecao(this,'LOGIN')">
						LOGIN
					</a>
				</li>
				<?php } ?>
				<?php if (isset($_SESSION['id'])) { ?>
				<li>
					<a class="ativo" href="#" 
						onclick="mudaSecao(this,'MOTO')">
						MOTO
					</a>
				</li>
				<li>
					<a href="#"
						onclick="mudaSecao(this,'LOGOFF')">
						LOGOFF
					</a>
				</li>
				<?php } ?>
			</ul>
		</nav>
	</header>
	<main>
		<?php if (!isset($_SESSION['id'])) { ?>
		<section id="LOGIN" class="ativa">
			<form method="post"">
				<fieldset>
					<label for="log">Login</label>
					<input type="text" name="log" id="log" placeholder="[campo obrigatório]" autofocus required>
					<label for="log">Senha</label>
					<input type="password" name="pwd" id="pwd" required>
					<input type="submit" name="enviar" id="env" value="Enviar">
				</fieldset>
			</form>
		</section>
		<?php } ?>
		<?php if (isset($_SESSION['id'])) { ?>
		<section id="MOTO" class="ativa">
			<img src="https://i.ytimg.com/vi/s5l32CTC0wk/maxresdefault.jpg"/>
		</section>
		<section id="LOGOFF">
			<form method="post"">
				<input type="submit" name="logoff" id="off" value="LOGOFF">
			</form>
		</section>
		<?php } ?>
		<aside>
			Informações no ASIDE
		</aside>
	</main>
	<footer>
		&copy; SenacRS/FSPOA/SPI
	</footer>

	<script type="text/javascript">
	function mudaSecao(ancora, id_secao) {
		console.log(ancora);
		// remove classe do menu ativo
		document.getElementsByClassName('ativo')[0].className='';
		// adiciona classe no menu ativo
		ancora.className = 'ativo';
		// remove classe da secao ativa
		document.getElementsByClassName('ativa')[0].className='';
		// adiciona classe na secao a ser exibida
		document.getElementById(id_secao).className='ativa';
	}
	</script>
</body>
</html>