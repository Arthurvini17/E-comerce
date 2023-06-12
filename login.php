<?php

include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h2>Tela de Login</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

<?php
session_start();

if (!empty($_POST) && (empty($_POST['email']) || empty($_POST['senha']))) {
    header("Location: login.php");
  
} elseif (!empty($_POST)) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $query = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($query) == 1) {
        
        $resultado = mysqli_fetch_assoc($query);
        header("Location: index.php");
        
        
      
    } else {
        echo "Login inválido!";
    }
}




