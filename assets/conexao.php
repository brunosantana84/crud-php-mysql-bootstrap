<?php

$servername = "localhost"; // Servidor - localhost padrão
$database  = "crud"; // Nome do banco de dados
$username = "root"; // Usuário do banco de dados - root padrão
$password = ""; // Senha do banco de dados

//Create connetion

$conexao = mysqli_connect($servername, $username, $password, $database);

?>