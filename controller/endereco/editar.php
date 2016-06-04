<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
             
        $stmt = $con->prepare('UPDATE endereco SET lograduro = ?, numero = ?, bairro = ?, '
                . 'CEP = ?, ponto_de_referencia = ?, id_cidade = ? WHERE id = ?;');
        
        $stmt->bind_param('sssssii', $lograduro, $numero, $bairro, $cep, $ponto_de_referencia, $id_cidade, $id_endereco);
        
        $lograduro           = $_POST['lograduro'];
        $numero              = $_POST['numero'];
        $bairro              = $_POST['bairro'];
        $cep                 = $_POST['cep'];
        $ponto_de_referencia = $_POST['ponto_de_referencia'];
        $id_cidade           = $_POST['id_cidade'];
        $id_endereco         = $_POST['id_endereco'];
       
        $stmt->execute();
    }
 ?>