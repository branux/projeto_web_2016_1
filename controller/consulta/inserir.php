<?php 
    include("../../include/_conexao.php");
    if(isset($_POST['enviar'])) {
        
        
        $stmt = $con->prepare('INSERT INTO consulta (id_pessoa, data_consulta, peso, altura, evolucao_medica)
                                VALUES (?,?,?,?,?);');
        $stmt->bind_param('isdii', $id_pessoa, $data_consulta, $peso, $altura, $evolucao_medica);
        
        $id_pessoa          = $_POST['id_pessoa'];
        $data_consulta      = $_POST['data_consulta'];
        $peso               = $_POST['peso'];
        $altura             = $_POST['altura'];
        $evolucao_medica    = $_POST['evolucao_medica'];
           
       
        $stmt->execute();
        print_r($stmt->error_list);
        echo '<br/>';
        print_r($stmt->sqlstate);
        echo '<br/>';
       
    }
 ?>