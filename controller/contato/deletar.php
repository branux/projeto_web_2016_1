<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {

        $stmt = $con->prepare('DELETE FROM contato WHERE id = ?;');
        
        $stmt->bind_param('i', $id_contato);
        
        $id_contato           = $_POST['id_contato'];
       
        $stmt->execute();
    }
 ?>