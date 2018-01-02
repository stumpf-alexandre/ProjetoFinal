<?php
  define('pg','http://localhost/projeto');
  session_start();
  include 'cls/menuClass.php';
  include 'cls/conexaoClass.php';
  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de Contatos do Site G2">
    <meta name="author" content="Alexandre Luís Stumpf">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Página Virtual de Contatos</title>

    <link href="<?php echo pg?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo pg?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo pg?>/css/jumbotron.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
    <script src="<?php echo pg?>/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>

  <?php
    include_once("menu.php");
  ?>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <h1>Institucional</h1>     
  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Quem somos </h2>
          <p class="lead">Um bando de loucos destinados a trazer a verdadeira notícia, em tempo real, doa a quem doer. Fazemos com que ela chegue o mais rapido aos nossos leitores</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="imagens/download (1).jpg" alt="Generic placeholder image">
      </div>
    </div>
  <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">Missão </h2>
          <p class="lead">Atender aos nossos clientes com notícias, serviços e soluções de qualidade. Atingindo todo o publico de forma rapida e agil.</p>
        <h2 class="featurette-heading">Visão </h2>
          <p class="lead">Ser reconhecido no ramo de notícias como a melhor provedora de notícias para o publico geral.</p>
        <h2 class="featurette-heading">Valores </h2>
          <p class="lead">Pessoas;</p>
          <p class="lead">Confiabilidade e Ética;</p> 
          <p class="lead">Qualidade das notícias;</p>
          <p class="lead">Agregar valores para os clientes e parceiros.</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" src="imagens/download.jpg" alt="Generic placeholder image">
      </div>
    </div>
  <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">História </h2>
          <p class="lead">Uma equipe que traz ha internet notícias em tempo real e o mais rapido que a sua internet poder lhe proporcionar. Com constante busca por notícias reais e credibilidade em nosso site.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="imagens/imagesOK.jpg" alt="Generic placeholder image">
      </div>
    </div>
  <hr class="featurette-divider">
  <!-- /END THE FEATURETTES -->
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo pg?>/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo pg?>/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo pg?>/js/bootstrap.min.js"></script>
    <script src="<?php echo pg?>/js/holder.min.js"></script>
    <script src="<?php echo pg?>/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <div class="row">
    <div class="col-sm-12">
      <div class="footer">&copy; als.stumpf@gmail.com</div>
    </div>
  </div>
</html>
