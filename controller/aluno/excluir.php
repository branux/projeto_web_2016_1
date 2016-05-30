<?php 
	include "../../includes/_conexao.php";
	if(isset($_POST["id_pessoa"])){
		$id_pessoa = $_POST["id_pessoa"];

		$sqldelete = "DELETE FROM aluno WHERE id_pessoa = $id_pessoa)";


		mysqli_query($con, $sqldelete);
		
	}

 ?>