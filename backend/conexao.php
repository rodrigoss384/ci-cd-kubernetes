<?php

$servername = "mysql-conexao";
$username = "root";
$password = "";
$database = "meuBanco";

// Cria conexão 

$link = new mysqli($servername, $username, $password, $database)

// Checa conexão 

if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_errno()).
    exit();
}

?>