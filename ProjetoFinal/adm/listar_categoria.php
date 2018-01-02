<?php
  require_once '../cls/categoriaClass.php';
  require_once '../cls/conexaoClass.php';
  
  //instancia um objeto e conecta ao banco de dados
  $categorias = new categoriaClass();
  $categorias -> mostrar();
?>
<?php
  include_once("html.php");
?>
<?php
  include_once("html2.php");
?>
<?php
  include_once("menu_adm.php");
?>

  <div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Lista de Categorias das Notícias</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = $categorias -> getConsulta();
            while($linha = $result -> fetch_assoc()){
          ?>    
            <tr>
              <td><?php echo $linha['id'];?></td>
              <td><?php echo $linha['nome'];?></td>
              <td><a href="altera_categoria.php?cod=<?=$linha['id']?> "><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
              <td><a href="deleta_categoria.php?cod=<?=$linha['id']?> "><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
            </tr>

          <?php }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- /container -->
<?php
  include_once("html3.php");
?>