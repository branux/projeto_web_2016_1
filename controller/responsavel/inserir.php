<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        $stmt = $con->prepare('INSERT INTO responsavel (id_pessoa, orgao_expedidor, documento_comprobatorio, vigencia) VALUES (?,?,?,?);');
       
        $stmt->bind_param('isss', $id_pessoa, $orgao_expedidor, $documento_comprobatorio, $vigencia);
        
        $id_pessoa               = $_POST['id_pessoa'];
        $orgao_expedidor         = $_POST['orgao_expedidor'];
        $documento_comprobatorio = $_POST['documento_comprobatorio'];        
        $vigencia                = $_POST['vigencia'];
        
       
        $stmt->execute();
    }

    function inserirResponsavel ($documento_comprobatorio, $orgao_expedidor, $vigencia, $id_pessoa) {
       $stmt = $con->prepare('INSERT INTO responsavel (id_pessoa, orgao_expedidor, documento_comprobatorio, vigencia) VALUES (?,?,?,?);');
       
        $stmt->bind_param('isss', $id_pessoa, $orgao_expedidor, $documento_comprobatorio, $vigencia);
        
        $id_pessoa               = $_POST['id_pessoa'];
        $orgao_expedidor         = $_POST['orgao_expedidor'];
        $documento_comprobatorio = $_POST['documento_comprobatorio'];        
        $vigencia                = $_POST['vigencia'];
        
       
        $stmt->execute();
    }

 ?>