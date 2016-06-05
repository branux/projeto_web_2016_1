<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){

		$id = $_POST["id"];
		$sqldelete = "DELETE FROM condicao_de_saude WHERE id= $id";
		mysqli_query($con, $sqldelete);		

	}
?>