<?php 
	include "../../includes/_conexao.php";

	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$descricao = $_POST["descricao"];

		$sqlupdate = "UPDATE tipo_despesa SET descricao = '$descricao' WHERE id=$id";

		mysqli_query($con, $sqlupdate);

	}

 ?>