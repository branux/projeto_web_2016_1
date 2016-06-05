<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {

        $stmt = $con->prepare('UPDATE responsavel SET = documento_comprobatorio = ?, orgao_expedidor = ?, vigencia = ?, '
                . 'id_pessoa = ? WHERE id = ?;');
       
        $stmt->bind_param('sssii', $documento_comprobatorio, $orgao_expedidor, $vigencia, $id_pessoa, $id_responsavel);
        
        $documento_comprobatorio = $_POST['documento_comprobatorio'];
        $orgao_expedidor         = $_POST['orgao_expedidor'];
        $vigencia                = $_POST['vigencia'];
        $id_pessoa               = $_POST['id_pessoa'];
        $id_responsavel          = $_POST['id_responsavel'];
       
        $stmt->execute();
    }
 ?>