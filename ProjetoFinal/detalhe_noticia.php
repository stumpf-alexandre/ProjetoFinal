<?php
  //recupera o id pela URL
  $url = (isset($_GET['url'])) ? $_GET['url']:'';
  $explode = explode('/',$url);
  $noticia_id = $explode[1];
 //consultar os produtos
  $resultado_not = mysql_query("SELECT * FROM noticias WHERE id = '$noticia_id' LIMIT 1");
  $linhas_not = mysql_fetch_assoc($resultado_not);
  $imagem = pg.'/imagens/'$linhas_not['imagem'];
?>
  <!-- Menu -->
  <?php
    include_once("menu.php");
  ?>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <h1><?php echo $linhas_not['nome']; ?></h1>
  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading"><?php echo $linhas_not['nome']; ?></h2>
          <p class="lead"><?php  echo $linhas_not['descricao_curta']; ?></p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" data-src="<?php echo $imagem; ?>" alt="Generic placeholder image">
      </div>
    </div>
  <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-12">
        <p class="lead"><?php  echo $linhas_not['descricao_longa']; ?></p>
      </div>
    </div>
  <hr class="featurette-divider">
  <!-- /END THE FEATURETTES -->
  <footer>
    <p>&copy; als.stumpf@gmail.com</p>
  </footer>
  </div> <!-- /container -->






























    <div class="container marketing">
      <h1><?php echo $linhas_cat['nome'];] ?></h1>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <?php
          while($linhas_prod = mysql_fetch_array($resultado_prod)){
            $imagem = pg.'/imagens/'$linhas_prod['imagem'];
        ?>
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/<?php echo $imagem; ?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?php  echo $linhas_prod['nome']; ?></h2>
          <p><?php  echo $linhas_prod['descricao_curta']; ?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php } ?>      
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
      <?php
        //consultar os produtos conforme a categoria
        $resultado_prod_baixo = mysql_query("SELECT * FROM produtos WHERE categoria_id = '$categoria' ORDER BY 'id' LIMIT 3");
        $linhas_prod_baixo = mysql_num_rows($resultado_prod_baixo);
      ?>
      <hr class="featurette-divider">
      <?php
        //imprime lista baixo destaque
        $controle = 0;
        while($linhas_prod = mysql_fetch_array($resultado_prod_baixo)){
            $imagem = pg.'/imagens/'$linhas_prod['imagem'];
            if ($controle == 0) {
      ?>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php  echo $linhas_prod['nome']; ?></h2>
          <p class="lead"><?php  echo $linhas_prod['descricao_curta']; ?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="<?php echo $imagem; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <?php $controle = 1;
      }else { ?>
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php  echo $linhas_prod['nome']; ?></h2>
          <p class="lead"><?php  echo $linhas_prod['descricao_curta']; ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="<?php echo $imagem; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <?php $controle = 0; } ?>
<?php } ?>

      <!-- /END THE FEATURETTES -->

      <footer>
        <p>&copy; als.stumpf@gmail.com</p>
      </footer>
    </div> <!-- /container -->
