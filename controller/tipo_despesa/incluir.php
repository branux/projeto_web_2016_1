<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["descricao"])){

		$descricao = $_POST["descricao"];

		$sqlinsert = "INSERT INTO tipo_despesa (descricao) VALUES ('$descricao')";

		mysqli_query($con, $sqlinsert);
	}

 ?>