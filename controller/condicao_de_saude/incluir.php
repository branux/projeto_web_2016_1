<?php	
	
	include "conexao.php";
		
	if(isset($_POST["gravar"])){																																										
		$descicao = $_POST["descricao"];
		$id_saude_do_familiar = $_POST["id_saude_do_familiar"];
		$id_tipo_de_doenca = $_POST["id_tipo_de_doenca"];

		$sqlinsert = "INSERT INTO condicao_de_saude (descricao,id_saude_do_familiar,id_tipo_de_doenca) VALUES ('$descricao','$id_saude_do_familiar','$id_tipo_de_doenca')";
		mysqli_query($con, $sqlinsert);		
	}
?>