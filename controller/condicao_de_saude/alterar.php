<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){
		
		$id_ = $_POST["id"];
		$descicao = $_POST["descicao"];
		
		$sqlupdate = "UPDATE condicao_de_saude SET descricao = '$descricao' WHERE id = '$id'";
		
		mysqli_query($con, $sqlupdate);	
	}
?>