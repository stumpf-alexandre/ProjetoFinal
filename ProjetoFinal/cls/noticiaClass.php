<?php
	require_once 'conexaoClass.php';
	class noticiaClass{
		//identificação das propriedades da classe
		var $codigo;
		var $nome;
		var $descricao_curta;
		var $descricao_longa;
		var $imagem;
		var $categoria_id;

		//metodo que executa uma consulta select no Banco de Dados
		public function mostrar(){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM noticias";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);
		}
		
		//metodo que executa uma consulta select no Banco de Dados
		public function pesquisa($nome){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM noticias WHERE id='".$nome."'";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);
		}

		public function pesquisaPorCat($id){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "SELECT * FROM noticias WHERE categoria_id=$id;";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);
		}
		
		//metodo que retorna a consulta efetuada
		public function getConsulta(){
			return $this -> resultado;
		}

		//metodo que deleta'"
		public function deleta($codigo){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "DELETE FROM noticias WHERE id='".$codigo."'";
			unlink('../imagens/'.$codigo.'.jpg');

			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_noticia.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi deletado\");
				</script>";
			}
		}

		//metodo que altera
		public function altera($noticia){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$sql = "UPDATE noticias SET nome='".$noticia -> nome."', descricao_curta='".$noticia -> descricao_curta."', descricao_longa='".$noticia -> descricao_longa."', imagem='".$noticia -> imagem."', categoria_id='".$noticia -> categoria_id."', modificado=NOW() WHERE id='".$noticia ->id."';";
			$conn = $Oconn -> getconn();
			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_noticia.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi alterado\");
				</script>";
			}
		}

		//metodo que insere
		public function insere($noticia){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "INSERT INTO noticias(nome, descricao_curta, descricao_longa, imagem,
			categoria_id, criado)
			VALUES(".
				"'".$noticia -> nome ."',".
				"'".$noticia -> descricao_curta . "',".
				"'".$noticia -> descricao_longa ."',".
				"'".$noticia -> imagem ."',".
				"'".$noticia -> categoria_id ."',".
				"now());";

			
			$this -> resultado = $conn -> query($sql);


			if ($this -> resultado == true) {
				header('location: listar_noticia.php');
			}
			else {
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto/adm/listar_noticia.php'>
				<script type=\"text/javascript\">alert(\"Não foi cadastrado\");
				</script>";
			}
			return $conn -> insert_id;
		}
	}
?>