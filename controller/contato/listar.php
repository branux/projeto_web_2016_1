<?php 
    include("../../include/_conexao.php");
    
    if(isset($_POST['listar'])) {
        $id_pessoa = $POST['id_pessoa'];
        
        $result = $con->query("SELECT * FROM contato WHEHE id_pessoa = $id_pessoa");
        
    }
 ?>