<?php
 
$cep = $_POST['cep'];
 
//$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
//$reg = simplexml_load_file("https://viacep.com.br/ws/$cep/json/unicode/");
$url = @file_get_contents("https://viacep.com.br/ws/$cep/json/unicode/");

//echo "$reg";

//$var = json_decode($url);
/* 
$dados['sucesso'] = (string) $reg->resultado;
$dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
$dados['bairro']  = (string) $reg->bairro;
$dados['cidade']  = (string) $reg->cidade;
$dados['estado']  = (string) $reg->uf;
 */
//echo json_encode($dados);

echo $url;
 
?>