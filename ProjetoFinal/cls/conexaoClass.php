
<?php 
/**
* 
*/
class conexaoClass{
	var $conn;//propriedade
	
	//metodo
	function abrir_conexao(){//abrir conexao com banco de dados
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'projeto';
		
		$this -> conn = new mysqli($servername, $username, $password, $dbname);
	}
	function getconn(){
		return $this -> conn;
	}
}


 ?>