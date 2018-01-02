<?php
 include '../cls/noticiaClass.php';

  $noticia = new StdClass();

  $noticia -> nome = $_POST['nome'];
  $noticia -> descricao_curta = $_POST['descricao_curta'];
  $noticia -> descricao_longa = $_POST['descricao_longa'];
  $noticia -> categoria_id = $_POST['categoria_id'];

  $noticias = new noticiaClass();
  $id_noticia= $noticias -> insere($noticia);
  //var_dump($noticias);
  $destino = '../imagens/'.$id_noticia;

  $noticia -> imagem_temp = $_FILES["imagem"]["tmp_name"];
  $noticia -> imagem = $id_noticia;

  $extensao = str_replace('.', '', strrchr($noticia -> imagem, '.'));
  $max_width = 1500;
  $max_height = 500;

  $img = null;

  if ($extensao == 'jpg' || $extensao == 'jpeg') {
    $img = @imagecreatefromjpeg($noticia -> imagem_temp);
  }
  elseif ($extensao == 'png') {
    $img = @imagecreatefrompng($noticia -> imagem_temp);
  }
  elseif ($extensao == 'gif') {
    $img = @imagecreatefromgif($noticia -> imagem_temp);
  }
  elseif ($extensao == 'bmp') {
    $img = @imagecreatefromwbmp($noticia -> imagem_temp);
  }
  else{
    $img = @imagecreatefromjpeg($noticia -> imagem_temp);
  }

  if ($img) {
    $width = imagesx($img);
    $height = imagesy($img);
    $escala = min ($max_width/$width, $max_height, $heightt);
    if ($scale<1) {
      $new_width = floor($scale*$width);
      $new_height = floor($scale*$heightt);

      $tmp_img = @imagecreatetruecolor($new_width, $new_height);

      @imagecopyresampled($tmp_img,$img, 0, 0, 0, 0, $new_width,$new_height , $width, $height);
    }
  }
  @imagejpeg($img, $destino.'.jpg');

  header('location: listar_noticia.php');
?>