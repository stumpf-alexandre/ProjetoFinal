<?php
  include 'cls/categoriaClass.php';
  $menu = new categoriaClass();
  $menu -> mostrar();
  $menus = $menu -> getConsulta();
  //var_dump($menus);
?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">G2</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias <span class="caret"></span></a>
            <ul class="dropdown-menu">

            <?php
              foreach ($menus as $item):
            ?>
            <li>
              <a href="noticia.php?id=<?php echo $item['id']; ?>"><?php echo $item['nome']; ?></a>
            </li>
            <?php 
              endforeach;
            ?>
            
            </ul>
          </li>
          <li><a href="empresa.php">Empresa</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="adm/indexadm.php">Adm</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>