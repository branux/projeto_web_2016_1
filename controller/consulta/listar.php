<?php 
    include("../../include/_conexao.php");
    
    if(isset($_POST['listar'])) {
        $id_consulta = $POST['id_consulta'];
        
        $result = $con->query("SELECT * FROM consulta");
        
    }
 ?>