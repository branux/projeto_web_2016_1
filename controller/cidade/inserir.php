<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        $stmt = $con->prepare('INSERT INTO cidade (nome, id_estado) VALUES (?,?);');
        
        $stmt->bind_param('si', $nome, $id_estado);
        
        $nome       = $_POST['nome'];
        $id_estado  = $_POST['id_estado'];
       
        $stmt->execute();
    }
 ?>