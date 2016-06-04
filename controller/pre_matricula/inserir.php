<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {        
        
        $stmt = $con->prepare('INSERT INTO pre_matricula (id_pessoa, data_pre_matricula, observacao,
                                ano_letivo, qnt_filhos_mae, qnt_filhos_creche) VALUES (?,?,?,?,?,?);');
       
        $stmt->bind_param('isssii', $id_pessoa, $data_pre_matricula, $observacao, $ano_letivo, $qnt_filhos_mae,
                           $qnt_filhos_creche);
        
        $id_pessoa          = $_POST['id_pessoa'];
        $data_pre_matricula = $_POST['data_pre_matricula'];
        $observacao         = $_POST['observacao'];
        $sexo               = $_POST['sexo'];
        $cpf                = $_POST['cpf'];
        $rg                 = $_POST['rg'];
        $renda              = $_POST['renda'];
        $id_responsavel     = $_POST['id_responsavel'];
        $id_endereco        = $_POST['id_endereco'];        
       
        $stmt->execute();
    }
 ?>