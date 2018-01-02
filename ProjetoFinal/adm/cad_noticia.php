<?php
  include '../cls/categoriaClass.php';
   include '../cls/noticiaClass.php';
  $noticia = new categoriaClass();
  $noticia -> mostrar();
  $resultado = $noticia -> getConsulta();
?>
<?php
  include_once("html.php");
?>
<?php
  include_once("menu_adm.php");
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Noticia</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" name="imagem" action="insere_noticia.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nome da Notícia</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" placeholder="Nome da Notícia">
          </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Descrição Curta</label>
            <div class="col-sm-10">
              <textarea class="form-control ckeditor" rows="3" name="descricao_curta" placeholder="Descrição Curta da Notícia"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
            <div class="col-sm-10">
              <textarea class="form-control ckeditor" rows="3" name="descricao_longa" placeholder="Descrição Longa da Notícia"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Upload de Imagem</label>
            <input type="file" name="imagem">
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Categorias</label>
            <div class="col-sm-10">
              <select class="form-control" name="categoria_id">
                <option>Selecione</option>
    
                <?php
                  while($linha =mysqli_fetch_array($resultado)){
                ?>
                <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
                <?php 
                  } 
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<?php
  include_once("html2.php");
?>
<?php
  include_once("html3.php");
?>