<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$sqlupdate = "DELETE FROM beneficio_social WHERE id= $id";
		mysqli_query($con, $sqlupdate);		
	}
?>