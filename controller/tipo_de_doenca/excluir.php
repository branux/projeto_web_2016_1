<?php 
	
	include "conexao.php";
	
	if(isset($_POST["id"])){

		// Verifica se a chave estrangeira foi usada
		$sqlconsulta = "SELECT count(*) FROM tipo_de_doenca d INNER JOIN condicao_de_saude c ON d.id = c.id AND d.id = '$id'";

		if(!$sqlconsulta >= 1){
			$id = $_POST["id"];
			$sqldelete = "DELETE FROM tipo_de_doenca WHERE id= $id";
			mysqli_query($con, $sqldelete);		
		}else{
			echo "Existe relacionamentos com a doença";
		}

		}
?>