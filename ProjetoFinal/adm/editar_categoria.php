<?php
  require_once '../cls/categoriaClass.php';
  require_once '../cls/conexaoClass.php';

  $categorias = new categoriaClass();

  $codigo = $_POST['id'];
  $nome = $_POST['nome'];

  $categorias -> altera($codigo, $nome);
?>