<?php	
	
	include "conexao.php";
		
	if(isset($_POST["gravar"])){																														

		$id_familia = $_POST["id_familia"];
		$id_pessoa = $_POST["id_pessoa"];
		$idoso = $_POST["idoso"];
		$escolaridade = $_POST["escolaridade"];
		$cargo = $_POST["cargo"];

		// Paga data atual
		date_default_timezone_set('America/Salvador');
		$date = date('YYYY-MM-DD');

		// Pegar data de nascimento da pessoa
		$sqlSelect = "SELECT p.data_nascimento FROM pessoa p INNER JOIN familiar f ON p.id = f.id_pessoa WHERE p.'$id_pessoa' ";

		$idade = $date - $sqlSelect;


		$sqlupdate = "INSERT INTO familar (id_familia,id_pessoa,idoso,escolaridade,idade,cargo) VALUES ('$id_familia','$id_pessoa','$idoso','$escolaridade','$idade','$cargo')";
		mysqli_query($con, $sqlupdate);		
	}
?>