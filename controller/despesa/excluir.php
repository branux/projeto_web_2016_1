<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["id"])){
		$id = $_POST["id"];

		$sqldelete = "DELETE FROM despesa WHERE id= $id)";


		mysqli_query($con, $sqldelete);
		
	}

 ?>