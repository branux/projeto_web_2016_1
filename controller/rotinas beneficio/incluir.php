<?php	
	
	include "conexao.php";
		
	if(isset($_POST["id_grupo_familiar"])){																																																																																														
		
		$id_grupo_familiar = $_POST["id_grupo_familiar"];
		$nome = $_POST["nome"];
		$valor = $_POST["valor"];				
		
		$sqlinsert = "INSERT INTO beneficio_social (id_grupo_familiar, nome, valor) VALUES 
			($id_grupo_familiar, '$nome',$valor)";
		mysqli_query($con, $sqlinsert);		
	}
?>