<?php
$servername = "localhost";
$username = 'webaula_trab161';
$password = 'aula161';
$db = 'webaula_trabalhoweb';

$con = new mysqli($servername, $username, $password, $db);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
//echo "connect ok.";
}

?>