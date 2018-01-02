<?php
  define('pg','http://localhost/projeto');
  session_start();
  include 'cls/conexaoClass.php';
  
?>
    <!-- Menu -->
    <?php
      include_once("menu.php");
    ?>

     <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <?php
      $url = (isset($_GET['url'])) ? $_GET['url']:'';
      $explode = explode('/',$url);
      $paginas = array('home', 'noticia', 'empresa', 'contato', 'detalhe_noticia', 'proc_cad_contato');
      if (isset($explode[0]) && $explode[0] == '') {
        include "home.php";
      }
      else if ($explode[0] != ''){
        if (isset($explode[0]) && in_array($explode[0], $paginas)) {
          include $explode[0].".php";
        }
        else {
          include "home.php";
        }
      }
    ?>

