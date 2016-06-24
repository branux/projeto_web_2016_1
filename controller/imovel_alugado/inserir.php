<?php 
    include "../../includes/_conexao.php";



    $tipo               = $_POST['tipo'];
    $quantidade         = $_POST['quantidade'];
    $valor              = $_POST['valor'];
    $id_grupo_familiar  = 1;//$_POST['id_grupo_familiar'];
        

    $sql = "INSERT INTO imovel_alugado (tipo , quantidade , valor, id_grupo_familiar) 
    			VALUES ('$tipo', $quantidade, $valor, $id_grupo_familiar);";
    
    echo "<br>$sql";

    mysqli_query($con, $sql);

 ?>