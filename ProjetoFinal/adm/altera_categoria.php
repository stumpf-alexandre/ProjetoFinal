<?php
	require_once '../cls/categoriaClass.php';
	$id_categoria = $_GET['cod'];

	$categoria = new categoriaClass();
	$categoria -> pesquisa($id_categoria);

	$result = $categoria -> getConsulta();
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
	<form action="editar_categoria.php" method=POST>
		<div class="container theme-showcase" role="main">
    		<div class="page-header">
        		<h1>Alterar dados da Ctegoria da Notícia</h1>
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
			<td colspan=2><input type="submit" name="Enviar"></td>
		</tr>
	</form>
</table>
<?php
else:
	echo "<p>Categoria não encontrado</p>";
endif	
?>
<?php
  include_once("html3.php");
?>