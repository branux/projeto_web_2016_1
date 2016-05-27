<?php 

	include "_conexao.php";
	if(isset($_POST["id_pessoa"])){
	
		# Aluno

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

		$id_pessoa = $_POST["id_pessoa"];

		$sql = "UPDATE aluno SET turno = $turno, classificacao = $classificacao, certidao_de_nascimento = $certidao_de_nascimento, matricula_prefeitura = $matricula_prefeitura, religiao = $religiao, batizado = $batizado, id_pai = $id_pai, id_mae = $id_mae, url_foto = $url_foto, ano_do_aluno = $ano_do_aluno, id_responsavel = $id_responsavel WHERE id_pessoa = $id_pessoa;";

		mysqli_query($con, $sql);

	}

 ?>