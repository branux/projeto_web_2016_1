<?php	
	
	include "conexao.php";
		
	if(isset($_POST["gravar"])){																																										
		$descicao = $_POST["descricao"];

		$sqlinsert = "INSERT INTO tipo_de_doenca (descricao) VALUES ('$descricao')";
		mysqli_query($con, $sqlinsert);		
	}
?>