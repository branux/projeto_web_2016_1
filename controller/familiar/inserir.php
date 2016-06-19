<?php	
	
	include("../pessoa/inserir.php");

	$id_pessoa = mysqli_insert_id($con);

	include("../endereco/inserir.php");

	$id_endereco = mysqli_insert_id($con);
		
	if(isset($_POST["nome"])){																														
		
		$id_grupo_familiar = 1;

		$idoso = $_POST["idoso"];
		$id_parentesco = $_POST["parentesco"];
		$rg = $_POST["rg"];
		$cpf = $_POST["cpf"];
		$situacao = $_POST["situacao"];


		$sqlInsert = "INSERT INTO familiar (id_grupo_familiar, id_pessoa, id_endereco, idoso,rg,cpf, id_parentesco, situacao) VALUES ($id_grupo_familiar, $id_pessoa, $id_endereco, '$idoso','$rg','$cpf', $id_parentesco, $situacao)";

		echo "<br>$sqlInsert";

		mysqli_query($con, $sqlInsert);		
	}
?>
