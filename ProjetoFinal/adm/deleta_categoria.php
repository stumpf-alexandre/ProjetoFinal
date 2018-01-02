<?php
	include '../cls/categoriaClass.php';

	$categorias = new categoriaClass();

	$id = $_GET['cod'];

	$categorias -> deleta($id);
?>