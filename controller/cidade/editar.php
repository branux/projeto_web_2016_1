<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
             
        $stmt = $con->prepare('UPDATE cidade SET nome = ?, id_estado = ? WHERE id = ?;');
        
        $stmt->bind_param('ssi', $nome, $id_estado, $id_cidade);
        
        $nome  			 = $_POST['nome'];
        $id_estado       = $_POST['id_estado'];
        $id_cidade 		 = $_POST['id_cidade'];
       
        $stmt->execute();
    }
 ?>