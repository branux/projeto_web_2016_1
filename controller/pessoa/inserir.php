<?php 
    
    include "../../includes/_conexao.php";

    if(isset($_POST['nome'])) {

        $nome               = $_POST['nome'];
        $data_nascimento    = $_POST['data_nascimento'];
        $estado_civil       = $_POST['estado_civil'];
        $sexo               = $_POST['sexo'];


        $sql = "INSERT INTO pessoa (nome, data_nascimento, estado_civil, sexo) VALUES ('$nome', '$data_nascimento', '$estado_civil', '$sexo')";
        echo "$sql";

        mysqli_query($con, $sql);
    }
 ?>