<?php

//dados da BD bd_fotografia
$servername = "localhost";
$database = "bd_fotografia";
$username = "root";
$password = "";

// criar ligação à BD
$conn = mysqli_connect($servername, $username, $password, $database);

// verificar a ligação
if (!$conn){
	die("Erro na Ligação à Base de Dados:" . mysql_connect_error());
	
}

?>