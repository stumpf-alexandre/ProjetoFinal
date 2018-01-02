<?php
	require_once 'conexaoClass.php';
	class categoriaClass{
		//identificação das propriedades da classe
		var $codigo;
		var $nome;

		//metodo que executa uma consulta select no Banco de Dados
		public function mostrar(){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "SELECT * FROM categorias ORDER BY id";
			$this -> resultado = $conn -> query($sql);
		}

		//metodo que executa uma consulta select no Banco de Dados
		public function pesquisa($id){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM categorias WHERE id=$id";
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
			$sql = "DELETE FROM categorias WHERE id={$codigo};";

			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_categoria.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi deletado\");
				</script>"; 
			}
		}

		//metodo que altera
		public function altera($codigo, $nome){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "UPDATE categorias SET nome='".$nome."', modificado=NOW() WHERE id=".$codigo.";";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_categoria.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi alterado\");
				</script>";
			}
		}

		//metodo que insere
		public function insere($nome){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "INSERT INTO categorias(nome, criado)
			VALUES(".
				"'".$nome -> nome ."',".
				"now());";

			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_categoria.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi cadastrado\");
				</script>";
			}
		}
	}
?>