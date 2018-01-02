<?php
  include_once("html.php");
?>
<?php
  include_once("menu_adm.php");
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Usuário</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="insere_usuario.php">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="usuario" placeholder="Digite um Usuário">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="senha" placeholder="Digite uma Senha">
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
</div>
<?php
  include_once("html2.php");
?>
<?php
  include_once("html3.php");
?>