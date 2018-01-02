<?php
  include '../cls/categoriaClass.php';

  $categoria = new StdClass();

  $categoria -> nome = $_POST['nome'];
 
  $categorias = new categoriaClass();
  $categorias -> insere($categoria);
?>