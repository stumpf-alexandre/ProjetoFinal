<?php
	require_once '../cls/usuarioClass.php';
	$id_usuario = $_GET['cod'];

	$usuario = new usuarioClass();
	$usuario -> pesquisa($id_usuario);

	$result = $usuario -> getConsulta();
	if ($linha = $result -> fetch_assoc()):
		//var_dump($linha);
?>
<?php
  include_once("html.php");
?>
<?php
  include_once("html2.php");
?>
<table class='table table-striped'>
	<form action="editar_usuario.php" method=POST>
		<div class="container theme-showcase" role="main">
    		<div class="page-header">
        		<h1>Alterar Dados do Usuario</h1>
    		</div>
    	</div>
		<tr hidden>
			<td>Código:</td>
			<td><input type="text" name="id" value="<?= $linha['id'] ?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td>Nome:</td>
			<td><input type="text" name="nome" value="<?= $linha['nome'] ?>"></td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input type="text" name="email" value="<?= $linha['email'] ?>"></td>
		</tr>
		<tr>
			<td>Usuario:</td>
			<td><input type="text" name="usuario" value="<?= $linha['usuario'] ?>"></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type="text" name="senha" value="<?= $linha['senha'] ?>"></td>
		</tr>
		<tr>
			<td colspan=2><input type="submit" name="Enviar"></td>
		</tr>
	</form>
</table>
<?php
else:
	echo "<p>Usuario não encontrado</p>";
endif	
?>
<?php
  include_once("html3.php");
?>