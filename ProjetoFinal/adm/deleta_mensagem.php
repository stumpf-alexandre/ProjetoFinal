<?php
	include '../cls/mensagemClass.php';

	$contato = new mensagemClass();

	$id = $_GET['cod'];

	$contato -> deleta($id);
?>