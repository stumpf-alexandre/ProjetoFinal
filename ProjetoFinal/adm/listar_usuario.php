<?php
  require_once '../cls/usuarioClass.php';
  require_once '../cls/conexaoClass.php';
  
  //instancia um objeto e conecta ao banco de dados
  $usuarios = new usuarioClass();
  $usuarios -> mostrar();

  include_once("html.php");

  include_once("html2.php");

  include_once("menu_adm.php");
?>

  <div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Lista de Usuários</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Usuário</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = $usuarios -> getConsulta();
            while($linha = $result -> fetch_assoc()){
          ?>    
            <tr>
              <td><?php echo $linha['id'];?></td>
              <td><?php echo $linha['nome'];?></td>
              <td><?php echo $linha['email'];?></td>
              <td><?php echo $linha['usuario'];?></td>
              <td><a href="altera_usuario.php?cod=<?=$linha['id']?> "><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
              <td><a href="deleta_usuario.php?cod=<?=$linha['id']?> "><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
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