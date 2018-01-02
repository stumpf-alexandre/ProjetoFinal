<!-- inicio navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="sair.php">
        Home 
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="listar_usuario.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listar_usuario.php">Listar</a></li>
            <li><a href="cad_usuario.php">Cadastrar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="listar_noticia.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Noticia <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listar_noticia.php">Listar</a></li>
            <li><a href="cad_noticia.php">Cadastrar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="listar_categoria.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listar_categoria.php">Listar</a></li>
            <li><a href="cad_categoria.php">Cadastrar</a></li>
          </ul>
        </li>
        <li><a href="listar_mensagem_contato.php">Mensagens</a></li> 
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- Fim navbar -->