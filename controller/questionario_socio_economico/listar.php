<?php 
    include("../../include/_conexao.php");
    
    if(isset($_POST['listar'])) {
        $id_questionario_socio_economico = $_POST['id_questionario_socio_economico'];
        $result = $con->query('SELECT * FROM questionario_socio_economico WHERE id_questionario_socio_economico = ?;');
    }
 ?>