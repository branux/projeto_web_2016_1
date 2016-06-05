<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
             
        $stmt = $con->prepare('INSERT INTO endereco (lograduro , numero , bairro, '
                                 . 'CEP , ponto_de_referencia, id_cidade) VALUES (?,?,?,?,?,?);');
        
        $stmt->bind_param('sssssi', $lograduro, $numero, $bairro, $cep, $ponto_de_referencia, $id_cidade);
        
        $lograduro           = $_POST['lograduro'];
        $numero              = $_POST['numero'];
        $bairro              = $_POST['bairro'];
        $cep                 = $_POST['cep'];
        $ponto_de_referencia = $_POST['ponto_de_referencia'];
        $id_cidade           = $_POST['id_cidade'];
       
        $stmt->execute();
    }
 ?>