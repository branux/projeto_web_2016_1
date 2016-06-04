<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('DELETE FROM questionario_socio_economico WHERE id = ?;');
        
        $stmt->bind_param('i', '$id_questionario_socio_economico');
        
        $id_genitor = $_POST['id_questionario_socio_economico'];
       
        $stmt->execute();
    }
 ?>