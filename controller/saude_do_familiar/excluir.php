<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){

		$id = $_POST["id"];
		$sqldelete = "DELETE FROM saude_do_familiar WHERE id= $id"
		mysqli_query($con, $sqldelete);	

		}
?>