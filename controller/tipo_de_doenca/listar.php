<?php	
	
	include "conexao.php";
		
	if(isset($_POST["listar"])){																																									

		$sqlselect = "SELECT * FROM tipo_de_doenca";
		mysqli_query($con, $sqlselect);		
	}
?>