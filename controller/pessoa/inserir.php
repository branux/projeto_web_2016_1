<?php 
    
    include "../../includes/_conexao.php";

    if(isset($_POST['nome'])) {

        $nome               = $POST['nome'];
        $data_nascimento    = $POST['data_nascimento'];
        $estado_civil       = $POST['estado_civil'];
        $sexo               = $POST['sexo'];


        $sql = "INSERT INTO pessoa (nome, data_nascimento, estado_civil, sexo) VALUES ('$nome', '$data_nascimento', '$estado_civil', '$sexo')"

        mysqli_query($con, $sql);
    }
 ?>