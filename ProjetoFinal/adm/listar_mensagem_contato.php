<?php
  require_once '../cls/mensagemClass.php';
  require_once '../cls/conexaoClass.php';
  
  //instancia um objeto e conecta ao banco de dados
  $contatos = new mensagemClass();
  $contatos -> mostrar();
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
        <h1>Lista de Contatos</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Assunto</th>
              <th>Mensagem</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = $contatos -> getConsulta();
            while($linha = $result -> fetch_assoc()){
          ?>    
            <tr>
              <td><?php echo $linha['id'];?></td>
              <td><?php echo $linha['nome'];?></td>
              <td><?php echo $linha['email'];?></td>
              <td><?php echo $linha['telefone'];?></td>
              <td><?php echo $linha['assunto'];?></td>
              <td><?php echo $linha['mensagem'];?></td>
              <td><a href="deleta_mensagem.php?cod=<?=$linha['id']?> "><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
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