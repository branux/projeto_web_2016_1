<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM genitor WHERE id = ?;');
        
        $stmt->bind_param('i', '$id_genitor');
        
        $id_genitor = $_POST['id_genitor'];
       
        $stmt->execute();
    }
 ?>