<?php
 
$cep = $_POST['cep'];
 
$url = @file_get_contents("https://viacep.com.br/ws/$cep/json/unicode/");

echo $url;
 
?>