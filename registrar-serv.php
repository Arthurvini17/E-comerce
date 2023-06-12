<?php
include ('conexao.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cep = $_POST["cep"];
    $cpf = $_POST["cpf"];

    $sqli = "INSERT INTO usuario (nome, email, senha, cep, cpf) VALUES ('$nome', '$email','$senha','$cep','$cpf')";

    if($conn->query($sqli) === TRUE) {
        echo "Dados inseridos com sucesso!";
        header("Location: login.php");
    } else {
        echo "erro ao inserir dados: " . $conn->error;
    }
}

$conn->close();

?>