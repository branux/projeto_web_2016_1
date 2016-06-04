<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        
        $stmt = $con->prepare('INSERT INTO genitor (id_pessoa, local_de_trabaho, cargo_funcao, profissao) VALUES (?,?,?,?);');
       
        $stmt->bind_param('isss', $id_pessoa, $local_de_trabaho, $cargo_funcao, $profissao);
        
        $id_pessoa        = $_POST['id_pessoa'];
        $local_de_trabaho = $_POST['local_de_trabalho'];
        $cargo_funcao     = $_POST['cargo_funcao'];
        $profissao        = $_POST['profissao'];
       
        $stmt->execute();
    }
 ?>