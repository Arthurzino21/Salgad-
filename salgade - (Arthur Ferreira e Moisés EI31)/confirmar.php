<?php

session_start();

if(!isset($_SESSION['Logado'])){
header("Location: login.php");
exit;

}

include "arq/cons.php";
require_once "arq/DLL.php";

$cpf = $_SESSION['CPF'];

$consulta = "SELECT * FROM usuarios WHERE cpf = '$cpf'";
$resultado = banco($server, $user, $password, $db, $consulta);
$usuario = $resultado->fetch_assoc();
$nome = $usuario['nome'];

$total = 0;

?>

<!DOCTYPE html>

<html>

<head>

    <title>Confirmar Compra</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="card2">

        <h1>Confirmar Compra</h1>

        <h2>Cliente</h2>

        <p><?php echo $nome; ?></p>

        <?php

foreach($_SESSION['carrinho']
as $item){

$subtotal =
$item['valor'] *
$item['quantidade'];

$total += $subtotal;

?>

        <p>

            <?php echo $item['produto']; ?>

            -

            Qtd:
            <?php echo $item['quantidade']; ?>

            -

            R$ <?php echo $subtotal; ?>

        </p>

        <?php

}

?>

        <h2>Total:
            R$ <?php echo $total; ?></h2>

        <form action="salvar_venda.php" method="POST">

            <label>Forma de Pagamento</label>

            <select name="pagamento" id="pagamento" onchange="mostrarPagamento()">

                <option value="Pix">Pix</option>

                <option value="Cartao">Cartão</option>

                <option value="Dinheiro">Dinheiro</option>

            </select>

            <br><br>

            <div id="pix">

                <h3>Pagamento via Pix</h3>

                <img src="img/qrcode.png" width="250">

                <p>Chave Pix: salgade@gmail.com</p>

            </div>

            <div id="cartao" style="display:none;">

                <h3>💳 Dados do Cartão</h3>

                <input type="text" name="nomecartao" placeholder="Nome impresso no cartão">

                <input type="text" name="numero" placeholder="Número do cartão">

                <input type="text" name="validade" placeholder="Validade (MM/AA)">

                <input type="text" name="cvv" placeholder="CVV">

            </div>

            <div id="dinheiro" style="display:none;">

                <h3>Pagamento em Dinheiro</h3>

                <p>O pagamento será realizado na entrega.</p>

            </div>

            <br>

            <input type="submit" value="Confirmar Compra" class="botao">

        </form>
    </div>
    <script>
    function mostrarPagamento() {

        var tipo =
            document.getElementById("pagamento").value;

        document.getElementById("pix").style.display =
            "none";

        document.getElementById("cartao").style.display =
            "none";

        document.getElementById("dinheiro").style.display =
            "none";

        if (tipo == "Pix") {

            document.getElementById("pix").style.display =
                "block";

        }

        if (tipo == "Cartao") {

            document.getElementById("cartao").style.display =
                "block";

        }

        if (tipo == "Dinheiro") {

            document.getElementById("dinheiro").style.display =
                "block";

        }

    }
    </script>
</body>

</html>
