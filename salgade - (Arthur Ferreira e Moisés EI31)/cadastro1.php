<!DOCTYPE html>
<html>

<head>

    <title>Cadastro</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/validacoes.js"></script>

</head>

<body>

    <form action="salvar_usuario.php" method="POST" class="formulario"
        onsubmit="return validarCPF(document.getElementById('cpf').value)">

        <h1>Cadastro</h1>

        <input type="text" name="nome" placeholder="Nome Completo" required>

        <input type="text" id="cpf" name="cpf" placeholder="CPF" required>

        <input type="text" name="endereco" placeholder="Endereço" required>

        <input type="text" name="bairro" placeholder="Bairro" required>

        <input type="text" name="cidade" placeholder="Cidade" required>

        <input type="text" name="estado" placeholder="Estado" required>

        <input type="text" name="cep" placeholder="CEP" required>

        <input type="submit" value="Continuar" class="botao">

    </form>

</body>

</html>