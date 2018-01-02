<?php

	class menuClass{
		var $nome;

		public function mostrar(){
			$Oconn = new conexaoClass();
			$Oconn -> abrir_conexao();
			$conn = $Oconn -> getconn();
			$sql = "SELECT * FROM categorias ORDER BY id";
			$this -> resultado = $conn -> query($sql);
		}
		
		//metodo que retorna a consulta efetuada
		public function getConsulta(){
			return $this -> resultado;
		}
	}
?>