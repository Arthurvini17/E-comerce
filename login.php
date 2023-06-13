<!DOCTYPE html>
<html>
<link rel="stylesheet" href="login.css">

<head>
  <title>Tela de Login</title>
</head>

<body>


  <section id="promocao">
    <div class="promocao">
      <h2><?php echo "Hoje no dia: " . date('d/m/y') . " temos uma promoção especial nos perifericos"; ?></h2>
    
    </div>
  </section>


  <section id="formulario">
    <div class="pai">
      <h2>Faça seu Login</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Entrar">
        <a href="registrar.php">não tenho uma conta</a>
      </form>
      <div class="wave">
        <img src="imagens/wave.svg" alt="">
      </div>
    </div>
  </section>
</body>

</html>

<?php


include('conexao.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = md5($_POST["senha"]);
  $sql = "SELECT email, senha FROM usuario WHERE email = '$email' AND senha = '$senha'";

  $result = $conn->query($sql);
  var_dump($result);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      header("Location: index.php");
    }
  } else {
    echo "ERRO";
  }
  $conn->close();
}
?>