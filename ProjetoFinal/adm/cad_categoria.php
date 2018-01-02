<?php
  include_once("html.php");
?>
<?php
  include_once("menu_adm.php");
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Categoria da Notícia</h1>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="insere_categoria.php">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Categoria da Notícia</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" placeholder="Nome da Categoria da Noticia">
          </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div> <!-- /container --!>
<?php
  include_once("html2.php");
?>
<?php
  include_once("html3.php");
?>