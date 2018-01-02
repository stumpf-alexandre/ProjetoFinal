<?php
require_once 'conexaoClass.php';
	class mensagemClass{
		var $codigo;
		var $nome;
		var $email;
		var $telefone;
		var $assunto;
		var $mensagem;

		//metodo que mostra a consulta efetuada
		public function mostrar(){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "SELECT * FROM contatos ORDER BY id ASC";
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
			$sql = "DELETE FROM contatos WHERE id = {$codigo};";

			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('location: listar_mensagem_contato.php');
			}
			else {
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto/adm/listar_mensagem_contato.php'>
				<script type=\"text/javascript\">alert(\"Não foi deletado\");
				</script>";
			}
		}

		//metodo que insere
		public function insere($contato){
		
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "INSERT INTO contatos(nome, email, telefone, assunto, mensagem, criado)
			VALUES(".
				"'".$contato -> nome ."',".
				"'".$contato -> email . "',".
				"'".$contato -> telefone ."',".
				"'".$contato -> assunto ."',".
				"'".$contato -> mensagem ."',".
				"now());";
				
			$this -> resultado = $conn -> query($sql);

			if ($this -> resultado == true) {
				header('llocation: listar_mensagem_contato.php');
			}
			else {
				echo "
				<script type=\"text/javascript\">alert(\"Não foi cadastrado\");
				</script>";
			}
		}
	}
?>