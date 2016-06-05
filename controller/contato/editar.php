<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
             
        $stmt = $con->prepare('UPDATE contato SET telefone = ?, tipo = ? WHERE id = ?;');
        
        $stmt->bind_param('ssi', $telefone, $tipo, $id_contato);
        
        $telefone   = $_POST['telefone'];
        $tipo       = $_POST['tipo'];
        $id_contato = $_POST['id_contato'];
       
        $stmt->execute();
    }
 ?>