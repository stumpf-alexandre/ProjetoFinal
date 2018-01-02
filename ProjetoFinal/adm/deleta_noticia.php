<?php
	include '../cls/noticiaClass.php';

	$noticias = new noticiaClass();

	$id = $_GET['cod'];

	$noticias -> deleta($id);
?>