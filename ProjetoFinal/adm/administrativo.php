<?php
	session_start();
  include_once("../cls/conexaoClass.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Alexandre Luís Stump">
    <link rel="icon" href="../imagens/favicon.ico">

    <title>Página Administrativa</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="../css/bootstrap-theme.min.css" rel="stylesheet"> -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>

  <body role="document">
    <?php
      include_once("menu_adm.php");

      include_once("bem_vindo.php");

        if(!isset($_GET['ma']))
          require_once('administrativo.php');
        else{
          switch($_REQUEST['ma']){

            case '1':
            require_once('deleta_usuario.php');
            break;
            
            case '2':
            require_once('listar_usuario.php');
            break;

            case '3':
            require_once('cad_usuario.php');
            break;
            
            case '4':
            require_once('editar_usuario.php');
            break;

            case '5':
            require_once('visual_usuario.php');
            break;
            
            case '6':
            require_once('cad_categoria.php');
            break;

            case '7':
            require_once('listar_categoria.php');
            break;
            
            case '8':
            require_once('visual_categoria.php');
            break;

            case '9':
            require_once('editar_categoria.php');
            break;
            
            case '10':
            require_once('listar_noticia.php');
            break;

            case '11':
            require_once('cad_noticia.php');
            break;
            
            case '12':
            require_once('visual_noticia.php');
            break;

            case '13':
            require_once('editar_noticia.php');
            break;

            case '18':
            require_once('listar_destaque_not.php');
            break;

            case '19':
            require_once('cad_destaque_not.php');
            break;
            
            case '22':
            require_once('listar_mensagem_contato.php');
            break;

            case '23':
            require_once('index.php');
            break;

            case '24':
            require_once('insere_usuario.php');
            break;

            case '25':
            require_once('deleta_noticia.php');
            break;

          }
        }
      ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>