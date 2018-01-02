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

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>

  <?php
    include_once("menu.php");
  ?>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <h1>Contato por E-mail</h1>
    <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="adm/insere_mensagem.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nome Completo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nome" placeholder="Preencher nome completo" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="E-mail" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="telefone" placeholder="Telefone" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Assunto</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="assunto" placeholder="Assunto da mensagem" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Mensagem</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="mensagem"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success" value="Enviar">
              </div>
            </div>
          </form>
        </div>
      </div>
  <hr class="featurette-divider">
  <!-- /END THE FEATURETTES -->
  </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <div class="row">
    <div class="col-sm-12">
      <div class="footer">&copy; als.stumpf@gmail.com</div>
    </div>
  </div>
</html>