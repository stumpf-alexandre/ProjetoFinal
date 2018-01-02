<?php
	session_start();
	session_destroy();

	//remove todas as informações contidas na variavel global
	unset($_SESSION['usuarioId'],
		  $_SESSION['usuarioNome'],
		  $_SESSION['usuarioUsuario'],
		  $_SESSION['usuarioSenha']);

	// redireciona o usuario para a pagina home
	header("location: ../index.php");
?>