<?php
	include '../cls/usuarioClass.php';

	$usuarios = new usuarioClass();

	$id = $_GET['cod'];

	$usuarios -> deleta($id);
?>