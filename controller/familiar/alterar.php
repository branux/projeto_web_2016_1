<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){
		
		$id_ = $_POST["id"];
		$id_familia = $_POST["id_familia"];
		$id_pessoa = $_POST["id_pessoa"];
		$idoso = $_POST["idoso"];
		$escolaridade = $_POST["escolaridade"];
		$idade = $_POST["idade"];
		$cargo = $_POST["cargo"];

		
		$sqlupdate = "UPDATE familiar SET id_familia = '$id_familia',id_pessoa = '$id_pessoa', idoso = '$idoso', escolaridade = '$escolaridade' , idade = '$idade' ,  cargo = '$cargo' WHERE id = '$id'";
		
		mysqli_query($con, $sqlupdate);	
	}
?>