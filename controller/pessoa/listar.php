<?php 
    include("../../include/_conexao.php");
    
    if(isset($_POST['listar'])) {
        $result = $con->query('SELECT * FROM pessoa');
    }
 ?>