<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){
		
		$id = $_POST["id"];
		$id_grupo_familiar = $_POST["id_grupo_familiar"];
		$nome = $_POST["nome"];
		$valor = $_POST["valor"];
		
		$sqlupdate = "UPDATE beneficio_social SET 
		id_grupo_familiar = $id_grupo_familiar, 
		nome = '$nome', 
		valor = $valor		
		WHERE id= $id";
		
		mysqli_query($con, $sqlupdate);	
	}
?>