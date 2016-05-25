<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$tipo = $_POST["tipo"];
		$valor = $_POST["valor"];
		$observacao = $_POST["observacao"];

		$sqlupdate = "UPDATE despesa SET tipo = $tipo, valor = $valor, observacao = '$observacao' WHERE id= $id)";

		mysqli_query($con, $sqlupdate);
		
	}

 ?>