<?php 

	//include "../../includes/_conexao.php";

	include("../pessoa/inserir.php");

	//if(isset($_POST["nome"])){

		# Aluno


	$id_pessoa = mysqli_insert_id($con);

	//$id_pessoa				= $_POST['id_pessoa'];
	$turno					= $_POST['turno'];
	$classificacao			= $_POST['classificacao'];
	$certidao_de_nascimento	= $_POST['certidao_de_nascimento'];
	$matricula				= $_POST['matricula'];
	$religiao				= $_POST['religiao'];
	$batizado				= $_POST['batizado'];
	$ano_do_aluno			= $_POST['ano_do_aluno'];	
	$grupo_familiar_id		= 1;//$_POST['grupo_familiar_id'];	

	
	$sql = "INSERT INTO aluno (id_pessoa,turno,classificacao,certidao_de_nascimento,matricula, religiao, batizado, ano_do_aluno, grupo_familiar_id)VALUES ($id_pessoa, '$turno','$classificacao', '$certidao_de_nascimento', '$matricula', '$religiao', '$batizado', '$ano_do_aluno', '$grupo_familiar_id');";
	
	echo "$sql";

	mysqli_query($con, $sql);

	//}

 ?>