<?php 
    include("../../include/_conexao.php");
    
    if(isset($_POST['listar'])) {
        $id_pessoa = $_POST['id_pessoa'];
        $result = $con->query('SELECT * FROM genitor WHERE id_pessoa = ?;');
    }
 ?>