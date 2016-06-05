<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){

			$id = $_POST["id"];
			$sqldelete = "DELETE FROM familiar WHERE id= $id";
			mysqli_query($con, $sqldelete);		

		}
?>