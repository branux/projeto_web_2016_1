<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
            
        $stmt = $con->prepare('UPDATE pessoa SET nome = ?, data_nascimento = ?, estado_civil = ?, '
                                 . 'sexo = ?, cpf = ?, rg = ?, renda = ?, id_responsavel = ?, '
                                 . 'id_endereco = ? WHERE id = ?;');
       
        $stmt->bind_param('sssssssiii', $nome, $data_nascimento, $estado_civil, $sexo, $cpf, $rg, $renda, $id_responsavel, $id_endereco, $id_pessoa);
        
        $nome            = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $estado_civil    = $_POST['estado_civil'];
        $sexo            = $_POST['sexo'];
        $cpf             = $_POST['cpf'];
        $rg              = $_POST['rg'];
        $renda           = $_POST['renda'];
        $id_responsavel  = $_POST['id_responsavel'];
        $id_endereco     = $_POST['id_endereco'];
        $id_pessoa       = $_POST['id_pessoa'];
        
       
        $stmt->execute();
    }
 ?>