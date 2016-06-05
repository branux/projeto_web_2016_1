<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM pessoa WHERE id = ?;');
        
        $stmt->bind_param('i', $id_pessoa);
        
        $id_pessoa = $_POST['id_pessoa'];
       
        $stmt->execute();
    }
 ?>