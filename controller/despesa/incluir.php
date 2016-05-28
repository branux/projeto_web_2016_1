<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["valor"])){
		$id_familia = $_POST["id_familia"];
		$id_tipo_despesa = $_POST["id_tipo_despesa"];
		$valor = $_POST["valor"];
		$observacao = $_POST["observacao"];

		$sqlinsert = "INSERT INTO despesa (id_tipo_despesa, id_familia, valor, observacao) VALUES ($id_tipo_despesa, $id_familia, $valor, '$observacao')";

		mysqli_query($con, $sqlinsert);
		
	}
 ?>