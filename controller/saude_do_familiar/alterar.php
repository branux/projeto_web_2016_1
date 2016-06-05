<?php	
	
	include "conexao.php";
		
	if(isset($_POST["id"])){																																										
		$id = $_POST["id"];
		$id_familiar = $_POST["id_familiar"];
		$usa_medicamento_continuo = $_POST["usa_medicamento_continuo"];
		$depesa_mensal = $_POST["depesa_mensal"];

		$sqlinsert = "UPDATE saude_do_familiar SET (id_familiar = '$id_familiar,usa_medicamento_continuo = '$usa_medicamento_continuo',depesa_mensal = '$depesa_mensal'");
		mysqli_query($con, $sqlinsert);		
	}
?>