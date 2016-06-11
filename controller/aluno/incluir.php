<?php 

	include "../../includes/_conexao.php";

	include("../pessoa/inserir.php");

	if(isset($_POST["nome"])){

		# Aluno


		$id_familia = $_POST["id_familia"];
		$turno = $_POST["turno"];
		$classificacao = $_POST["classificacao"];
		$certidao_de_nascimento = $_POST["certidao_de_nascimento"];
		$matricula_prefeitura = $_POST["matricula_prefeitura"];
		$religiao = $_POST["religiao"];
		$batizado = $_POST["batizado"];
		$id_pai = $_POST["id_pai"];
		$id_mae = $_POST["id_mae"];
		$url_foto = $_POST["url_foto"];
		$ano_do_aluno = $_POST["ano_do_aluno"];
		$id_responsavel = $_POST["id_responsavel"];

		# obter o id já que o campo é auto_increment, para tabela especializada, aluno.
		# $id_pessoa = mysqli_inset_id($con);

		$sql = "INSERT INTO aluno (id_pessoa, id_familia, turno, classificacao, certidao_de_nascimento, matricula_prefeitura, religiao, batizado, id_pai, id_mae, url_foto, ano_do_aluno, id_responsavel) VALUES ($id_pessoa, $id_familia, $turno, $classificacao, $certidao_de_nascimento, $matricula_prefeitura, $religiao, $batizado, $id_pai, $id_mae, $url_foto, $ano_do_aluno, $id_responsavel);";

		mysqli_query($con, $sql);

	}

 ?>