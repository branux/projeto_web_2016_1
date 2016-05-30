<?php	
	
	include "conexao.php";
		
	if(isset($_POST["id_grupo_familiar"])){																																																																																														
		
		$id_grupo_familiar = $_POST["id_grupo_familiar"];
		$tipo = $_POST["tipo"];
		$marca = $_POST["marca_modelo"];
		$ano_fabricacao = $_POST["ano_fabricacao"];
		$utilizacao = $_POST["utilizacao"];		
		
		$sqlinsert = "INSERT INTO veiculo (id_grupo_familiar, tipo, marca_modelo, ano_fabricacao, utilizacao) VALUES 
			($id_grupo_familiar, '$tipo','$marca', $ano_fabricacao, '$utilizacao')";
		mysqli_query($con, $sqlinsert);		
	}
?>