<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {

        $stmt = $con->prepare('UPDATE genitor SET = id_pessoa = ?, local_de_trabaho = ?, cargo_funcao = ?, '
                . 'profissao = ? WHERE id = ?;');
       
        $stmt->bind_param('isssi', $id_pessoa, $local_de_trabaho, $cargo_funcao, $profissao, $id_genitor);
        
        $id_pessoa        = $_POST['id_pessoa'];
        $local_de_trabaho = $_POST['local_de_trabalho'];
        $cargo_funcao     = $_POST['cargo_funcao'];
        $profissao        = $_POST['profissao'];
        $id_genitor       = $_POST['id_genitor'];
       
        $stmt->execute();
    }
 ?>