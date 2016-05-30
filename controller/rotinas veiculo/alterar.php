<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){
		
		$id_veiculo = $_POST["id"];
		$id_grupo_familiar = $_POST["id_grupo_familiar"];
		$tipo = $_POST["tipo"];
		$marca = $_POST["marca_modelo"];
		$ano_fabricacao = $_POST["ano_fabricacao"];
		$utilizacao = $_POST["utilizacao"];
		
		$sqlupdate = "UPDATE veiculo SET 
		id_grupo_familiar = $id_grupo_familiar, 
		tipo = '$tipo', 
		marca_modelo = '$marca', 
		ano_fabricacao = $ano_fabricacao,
		utilizacao = '$utilizacao'
		WHERE id= $id_veiculo";
		mysqli_query($con, $sqlupdate);	
	}
?>