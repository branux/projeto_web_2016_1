<?php	
	
	include "conexao.php";
		
	if(isset($_POST["listar"])){														

		$sqlupdate = "SELECT * FROM familiar ";
		mysqli_query($con, $sqlupdate);		
	}
?>