<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){
		
		$id_ = $_POST["id"];
		$descicao = $_POST["descicao"];
		
		$sqlupdate = "UPDATE tipo_de_doenca SET descricao = '$descricao' WHERE id = '$id'";
		
		mysqli_query($con, $sqlupdate);	
	}
?>