<?php
$cpf = '';
if (isset($_GET['cpf'])) {
    $cpf = htmlspecialchars($_GET['cpf']);
}
?>
<!DOCTYPE html>
<html>

<head>

    <title>Criar Login</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <form action="salvar_login.php" method="POST" class="formulario">

        <h1>Criar Login</h1>

        <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">

        <input type="text" name="login" placeholder="Login" required>

        <input type="password" name="senha" placeholder="Senha" required>

        <input type="submit" value="Cadastrar" class="botao">

    </form>

</body>

</html>