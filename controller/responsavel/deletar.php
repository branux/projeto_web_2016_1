<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM responsavel WHERE id = ?;');
        
        $stmt->bind_param('i', '$id_responsavel');
        
        $id_responsavel = $_POST['id_responsavel'];
       
        $stmt->execute();
    }
 ?>