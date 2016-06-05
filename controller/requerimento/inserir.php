<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        $stmt = $con->prepare('INSERT INTO requerimento (motivo_solicitacao,  id_pessoa, data_solicitacao, nome_crianca, ano_letivo) VALUES (?,?,?,?)');
        $stmt->bind_param('sisss', $motivo_solicitacao, $id_pessoa, $data_solicitacao, $nome_crianca, $ano_letivo);
        
        $motivo_solicitacao = $_POST['motivo_solicitacao'];
        $data_solicitacao   = $_POST['data_solicitacao'];
        $id_pessoa          = $_POST['id_pessoa'];
        $nome_crianca       = $_POST['nome_crianca'];
        $ano_letivo       = $_POST['ano_letivo'];

        $stmt->execute();
        print_r($stmt->error_list);
        echo '<br/>';
        print_r($stmt->sqlstate);
        echo '<br/>';        
        
    }
 ?>