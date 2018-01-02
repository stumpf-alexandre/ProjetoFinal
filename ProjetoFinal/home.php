<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de Notícias G2">
    <meta name="author" content="Alexandre Luís Stumpf">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Página Virtual de Notícias</title>

    <link href="<?php echo pg?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo pg?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo pg?>/css/jumbotron.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
    <script src="<?php echo pg?>/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
  <!-- Carousel
  ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="imagens/sites-de-noticias.jpg" alt="First slide">
      </div>
      <div class="item">
        <img class="second-slide" src="imagens/final2.png" alt="Second slide">
      </div>
      <div class="item">
        <img class="third-slide" src="imagens/images.png" alt="Third slide">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div><!-- /.carousel -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo pg?>/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo pg?>/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo pg?>/js/bootstrap.min.js"></script>
    <script src="<?php echo pg?>/js/holder.min.js"></script>
    <script src="<?php echo pg?>/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <hr class="featurette-divider">
  <div class="row">
    <div class="col-sm-12">
      <div class="footer">&copy; als.stumpf@gmail.com</div>
    </div>
  </div>
</html>