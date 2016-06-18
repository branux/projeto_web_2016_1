<?php 
    require("../../includes/_conexao_local.php");
    
    $stmt = $con->prepare('INSERT INTO endereco (lograduro , numero , bairro, '
                                 . 'CEP , ponto_de_referencia, id_cidade) VALUES (?,?,?,?,?,?);');
    
    $stmt->bind_param('sssssi', $lograduro, $numero, $bairro, $cep, $ponto_de_referencia, $id_cidade);
       
    
    $lograduro           = $_POST['endereco'];
    $numero              = $_POST['num'];
    $bairro              = $_POST['bairro'];
    $cep                 = $_POST['cep'];
    $ponto_de_referencia = $_POST['ref'];
    $id_cidade           = $_POST['cidade'];
       
    $stmt->execute();
 ?>