<?php
	require_once '../cls/noticiaClass.php';
	$id_noticia = $_GET['cod'];

	$noticia = new noticiaClass();
	$noticia -> pesquisa($id_noticia);

	$result = $noticia -> getConsulta();
	if ($linha = $result -> fetch_assoc()):
		//var_dump($linha);
?>
<?php
  include '../cls/categoriaClass.php';
  $categ = new categoriaClass();
  $categ -> mostrar();
  $resultado = $categ -> getConsulta();
?>
<?php
  include_once("html.php");
?>
<?php
  include_once("html2.php");
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Alterar Dados da Noticia</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="editar_noticia.php?funcao=alterar" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label" hidden>Codigo</label>
          <div class="col-sm-10">
            <input type="text" name="id" value="<?= $linha['id'] ?>" readonly="readonly" hidden>
          </div>
         </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nome da Notícia</label>
          <div class="col-sm-10">
            <input type="text" name="nome" value="<?= $linha['nome'] ?>">
          </div>
         </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Descrição Curta</label>
            <div class="col-sm-10">
              <input type="text" name="descricao_curta" value="<?= $linha['descricao_curta'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
            <div class="col-sm-10">
              <input type="text" name="descricao_longa" value="<?= $linha['descricao_longa'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Imagem atual <?php echo $linha['imagem'];?></label>
            <input type="file" name="imagem" value="<?= $linha['imagem'] ?>">
          </div>
          <div class="form-group">
        	<label for="inputEmail3" class="col-sm-2 control-label">Categorias:</label>
            	<div class="col-sm-10">
              		<select class="form-control" name="categoria_id">
                		<option>Selecione</option>
                		<?php
                  			while($linha =mysqli_fetch_array($resultado)){
                		?>
                		<option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome'];?></option>
                		<?php 
                  			} 
                		?>
              		</select>
            	</div>
        	</label>
        </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="upload" class="btn btn-success" value="Upload Imagem">Editar</button>
            </div>
          </div>
        </div>
      </form>
  	</div>
  </div>
<?php
else:
	echo "<p>Noticia não encontrado</p>";
endif	
?>
<?php
  include_once("html3.php");
?>