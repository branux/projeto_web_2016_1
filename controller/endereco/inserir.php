<?php 
    include "../../includes/_conexao_local.php";
    

    $logradouro          = $_POST['logradouro'];
    $numero              = $_POST['num'];
    $bairro              = $_POST['bairro'];
    $cep                 = $_POST['cep'];
    $ponto_de_referencia = $_POST['ref'];
    $id_cidade           = $_POST['cidade'];
    

    $sql = "INSERT INTO endereco (logradouro , numero , bairro,
                                 cep , ponto_de_referencia, id_cidade) VALUES ('$logradouro', '$numero', '$bairro', '$cep', '$ponto_de_referencia', $id_cidade);";
    
    echo "<br>$sql";

    mysqli_query($con, $sql);

 ?>