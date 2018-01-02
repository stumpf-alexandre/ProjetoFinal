<?php 	
	require_once ("../cls/usuarioClass.php");
	require_once ("../cls/conexaoClass.php");

  	$id = $_SESSION['id'];
	$user = $_SESSION['nome'];
?>

<div class="container theme-showcase" role="main">
	<div class="page-header">
		<h1>Bem Vindo </h1><?php echo $user;?>
	</div>
	<div class="col-md-2">
	
	</div>
</div> <!-- /container --!>