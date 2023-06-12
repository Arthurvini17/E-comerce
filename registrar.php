<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrar.css">
    <title>Login</title>
</head>
<body>
    <section id="formulario">
        <div class="pai">
            <div class="texto">
                <h1>Faça seu cadastro no nosso site</h1>
            </div>
            <div class="fundo-input">
            <form action="registrar-serv.php" method="post">
                <input type="text"  placeholder="Digite seu nome" name="nome">
                <input type="email"   placeholder="Digite um email valido" name="email">
                <input type="password" placeholder="Digite sua senha" name="senha">
                <input type="number" placeholder="Digite seu CEP" name="cep">
                <input type="number" placeholder="Digite seu CPF" name="cpf">
                <input type="submit" >
                

            </form>
            </div>
        </div>
    </section>
</body>
</html>