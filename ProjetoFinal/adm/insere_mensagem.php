<?php
	include '../cls/mensagemClass.php';

	$contato = new StdClass();

	$contato -> nome = $_POST['nome'];
	$contato -> email = $_POST['email'];
	$contato -> telefone = $_POST['telefone'];
	$contato -> assunto = $_POST['assunto'];
	$contato -> mensagem = $_POST['mensagem'];

	//var_dump($contato);

	$cont = new mensagemClass();
	$cont -> insere($contato);
?>