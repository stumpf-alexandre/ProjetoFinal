<?php
	require_once 'conexaoClass.php';
	class usuarioClass{
		//identificação das propriedades da classe
		var $codigo;
		var $nome;
		var $email;
		var $usuario;
		var $senha;

		//metodo que executa uma consulta select no Banco de Dados
		public function mostrar(){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM usuarios";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);
		}
		
		//metodo que executa uma consulta select no Banco de Dados
		public function pesquisa($usuario){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM usuarios WHERE id='".$usuario."' || usuario='".$usuario."'";
			//print $sql;
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);
		}
		
		//metodo que retorna a consulta efetuada
		public function getConsulta(){
			return $this -> resultado;
		}

		//metodo que deleta
		public function deleta($codigo){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "DELETE FROM usuarios WHERE id = {$codigo};";

			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_usuario.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi deletado\");
				</script>"; 
			}
		}

		//metodo que altera
		public function altera($codigo, $nome, $email, $usuario, $senha){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "UPDATE usuarios SET nome='".$nome."', email='".$email."', usuario='".$usuario."', senha='".$senha."', modificado=NOW() WHERE id=".$codigo.";";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_usuario.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi alterado\");
				</script>";
			}
		}

		//metodo que insere
		public function insere($usuario){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "INSERT INTO usuarios(nome, email, usuario, senha, criado)
			VALUES(".
				"'".$usuario -> nome ."',".
				"'".$usuario -> email . "',".
				"'".$usuario -> usuario ."',".
				"'".$usuario -> senha ."',".
				"now());";

			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_usuario.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi cadastrado\");
				</script>";
			}
		}
	}
?>