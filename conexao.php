<?php

$server = "localhost";
$user = "root";
$pass = "33779069ar";
$dbserver = "e-comerce";

$conn =  new mysqli($server, $user, $pass, $dbserver);

    if ($conn->connect_error) {
        die ("Falha na conexão:"  . $conn->connect_error);

    } else {
        echo "conexao feita";
    }