<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {

        $stmt = $con->prepare('DELETE FROM consulta WHERE id = ?;');
        
        $stmt->bind_param('i', $id_consulta);
        
        $id_consulta = $_POST['id_consulta'];
       
        $stmt->execute();
    }
 ?>