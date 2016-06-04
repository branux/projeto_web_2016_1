<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM endereco WHERE id = ?;');
        
        $stmt->bind_param('i', $id_endereco);
        
        $id_endereco           = $_POST['id_endereco'];
       
        $stmt->execute();
    }
 ?>