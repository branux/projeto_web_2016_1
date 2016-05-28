<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$id_tipo_despesa = $_POST["id_tipo_despesa"];
		$valor = $_POST["valor"];
		$observacao = $_POST["observacao"];

		$sqlupdate = "UPDATE despesa SET id_tipo_despesa = $id_tipo_despesa, valor = $valor, observacao = '$observacao' WHERE id= $id)";

		mysqli_query($con, $sqlupdate);
		
	}

 ?>