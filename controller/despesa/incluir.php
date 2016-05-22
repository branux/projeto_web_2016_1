<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["valor"])){
		$tipo = $_POST["tipo"];
		$valor = $_POST["valor"];
		$observacao = $_POST["observacao"];

		$sqlinsert = "INSERT INTO despesa (tipo, valor, observacao) VALUES ($tipo, $valor, '$observacao')";

		mysqli_query($con, $sqlinsert);
		
	}
 ?>