<?php
include "includes/_conexao.php";


$sql = "SELECT id, descricao FROM parentesco";

$result = mysqli_query($con, $sql);

?>