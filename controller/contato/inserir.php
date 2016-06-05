<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        $stmt = $con->prepare('INSERT INTO contato (telefone , tipo , id_pessoa) VALUES (?,?,?);');
        
        $stmt->bind_param('ssi', $telefone, $tipo, id_pessoa);
        
        $telefone   = $_POST['telefone'];
        $tipo       = $_POST['tipo'];
        $id_pessoa  = $_POST['id_pessoa'];
       
        $stmt->execute();
    }
 ?>