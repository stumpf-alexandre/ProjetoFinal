<?php
	session_start();
	require_once '../cls/usuarioClass.php';

	if (isset($_POST['usuario']))
		$nome_usuario = $_POST['usuario'];
	if (isset($_POST['senha']))
		$senha_usuario = $_POST['senha'];
	

	if (!(empty($nome_usuario)) OR !(empty($senha_usuario))){
		$usuario = new usuarioClass();
		$usuario -> pesquisa($nome_usuario);
		$result = $usuario -> getConsulta();
		
		if ($linha = $result -> fetch_assoc()){
			$senha = $linha['senha'];
		

			if ($senha == $senha_usuario){
				$_SESSION['id'] = $linha['id'];
				$_SESSION['usuario'] = $linha['usuario'];
				$_SESSION['nome'] = $linha['nome'];
				//manda o usuario para pagina adm
				header("location: administrativo.php");
			}			
			else{
				echo "
				<script type=\"text/javascript\">alert(\"Senha Invalida\");
				</script>";
				header("location: indexadm.php");
			}
			
				
		}
		else{
			echo "
				<script type=\"text/javascript\">alert(\"Usuario Invalido\");
				</script>";
				header("location: indexadm.php");
		}
		
	}
	else{
		echo "
				<script type=\"text/javascript\">alert(\"Digite o Usuario e a Senha\");
				</script>";
				header("location: indexadm.php");
	}

	
?>