<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="processa_login.php" method="POST" class="formulario">

        <h1>Login</h1>

        <input type="text" name="login" placeholder="Login" required>

        <input type="password" name="senha" placeholder="Senha" required>

        <input type="submit" value="Entrar" class="botao">

        <br><br>

        <a href="cadastro1.php">

            Cadastrar novo usuário

        </a>

    </form>

</body>

</html>