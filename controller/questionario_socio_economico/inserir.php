<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        
        $stmt = $con->prepare('INSERT INTO questionario_socio_economico (id_pessoa, ano_letivo, motivo_da_solicitacao,'
            .' registro_educacenso, data_questionario) VALUES (?,?,?,?,?);');

        $stmt->bind_param('issss', $id_pessoa, $ano_letivo, $motivo_da_solicitacao, $registro_educacenso,
                           $data_questionario);
        
        $id_pessoa               = $_POST['id_pessoa'];
        $ano_letivo              = $_POST['ano_letivo'];
        $motivo_da_solicitacao   = $_POST['motivo_da_solicitacao'];
        $registro_educacenso     = $_POST['registro_educacenso'];
        $data_questionario       = $_POST['data_questionario'];        
       
        $stmt->execute();
        print_r($stmt->error_list);
        echo '<br/>';
        print_r($stmt->sqlstate);
        echo '<br/>';
        
    }
 ?>