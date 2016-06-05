<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {

        $stmt = $con->prepare('DELETE FROM cidade WHERE id = ?;');
        
        $stmt->bind_param('i', $id_cidade);
        
        $id_cidade = $_POST['id_cidade'];
       
        $stmt->execute();
    }
 ?>