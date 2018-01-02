<?php
  require_once '../cls/noticiaClass.php';
  require_once '../cls/conexaoClass.php';

  $noticia = new StdClass();
  
  $noticia -> id = $_POST['id'];
  $noticia -> nome = $_POST['nome'];
  $noticia -> descricao_curta = $_POST['descricao_curta'];
  $noticia -> descricao_longa = $_POST['descricao_longa'];
  $noticia -> imagem = $_FILES['imagem']['name'];
  $noticia -> categoria_id = $_POST['categoria_id'];

  $noticias = new noticiaClass();
  $noticias -> altera($noticia);
?>