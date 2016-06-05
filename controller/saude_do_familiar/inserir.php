<?php	
	
	include "conexao.php";
		
	if(isset($_POST["gravar"])){																																										
		$id_familiar = $_POST["id_familiar"];
		$usa_medicamento_continuo = $_POST["usa_medicamento_continuo"];
		$depesa_mensal = $_POST["depesa_mensal"];

		$sqlinsert = "INSERT INTO saude_do_familiar (id_familiar,usa_medicamento_continuo,depesa_mensal) VALUES ('$id_familiar','$usa_medicamento_continuo','$depesa_mensal')";
		mysqli_query($con, $sqlinsert);		
	}
?>