<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de Contatos do Site G2">
    <meta name="author" content="Alexandre Luís Stumpf">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Página Virtual de Noticias</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
<?php
  define('pg','http://localhost/projeto');
  session_start();
  require_once 'cls/conexaoClass.php';
  require_once 'cls/noticiaClass.php';
 
  //require_once 'cls/categoriaClass.php';

   require_once 'menu.php';

  $noticia = new noticiaClass();
  $noticia -> pesquisaPorCat($_GET['id']);
  $result = $noticia -> getConsulta();

  $cat = new categoriaClass();
  $cat -> pesquisa($_GET['id']);
  $achei = $cat -> getConsulta();
  foreach ($achei as $categoria);
?>



<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1><?php echo $categoria['nome']; ?></h1>
  </div>
  <div class="col-md-2">
  
  </div>
</div>
<hr class="featurette-divider">
    <div class="row featurette">
        <?php
        if ($result -> fetch_assoc()) {
          foreach ($result as $noticia):
        ?> 
      <div class="col-md-7 col-md-push-5">
        <h2><?php  echo $noticia['nome']; ?></h2>
        <p><?php  echo $noticia['descricao_curta']; ?></p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" src="imagens/<?php echo $noticia['id'].'.jpg'?>" alt="Generic placeholder image">
      </div>
      <div class="col-md-12">
        <p><?php  echo $noticia['descricao_longa']; ?></p>
      </div>
    </div>
  <hr class="featurette-divider">
        <?php 
          endforeach;
        }
        else {
          ?>
            <h1>Nunhema noticia publicada</h1>

          <?php 
        }
        ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo pg?>/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo pg?>/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo pg?>/js/bootstrap.min.js"></script>
    <script src="<?php echo pg?>/js/holder.min.js"></script>
    <script src="<?php echo pg?>/js/ie10-viewport-bug-workaround.js"></script>
  </body>
   <footer>
    <p>&copy; als.stumpf@gmail.com</p>
  </footer>
</html>