<?php
$servername = "localhost";
$username = "root";
$password = "12345";

$con = new mysqli($servername, $username, $password, 'db001');

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>