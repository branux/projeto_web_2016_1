<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM pre_matricula WHERE id = ?;');
        
        $stmt->bind_param('i', $pre_matricula);
        
        $pre_matricula = $_POST['pre_matricula'];
       
        $stmt->execute();
    }
 ?>