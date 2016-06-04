<?php 
    include("../../include/_conexao.php");
    
    if(isset($_POST['listar'])) {
        $id_estado = $POST['id_estado'];
        
        $result = $con->query("SELECT * FROM cidade WHEHE id_estado = $id_estado");
        
    }
 ?>