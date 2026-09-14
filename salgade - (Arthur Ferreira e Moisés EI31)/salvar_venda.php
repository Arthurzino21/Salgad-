<?php

session_start();

include "arq/cons.php";
require_once "arq/DLL.php";

extract($_POST);

if(!isset($nomecartao)){
    $nomecartao = '';
}

$num = rand(1000,9999);
$data_banco = date("Y-m-d H:i:s"); 

$total = 0;

foreach($_SESSION['carrinho'] as $item){
    $total += $item['valor'] * $item['quantidade'];
}

$cliente = $_SESSION['Nome'];


$consulta = "INSERT INTO vendas (num, cliente, pagamento, data_venda, nome_cartao, total)
             VALUES ('$num', '$cliente', '$pagamento', '$data_banco', '$nomecartao', '$total')";

banco($server, $user, $password, $db, $consulta);


$consulta_id = "SELECT id FROM vendas WHERE num = '$num' ORDER BY id DESC LIMIT 1";
$resultado = banco($server, $user, $password, $db, $consulta_id);
$linha = $resultado->fetch_assoc();
$venda_id = $linha['id'];


foreach($_SESSION['carrinho'] as $item){

    $subtotal = $item['valor'] * $item['quantidade'];

    $consulta_item = "INSERT INTO vendas_itens (venda_id, produto, quantidade, valor, subtotal)
                      VALUES ('$venda_id', '{$item['produto']}', '{$item['quantidade']}', '{$item['valor']}', '$subtotal')";

    banco($server, $user, $password, $db, $consulta_item);

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Compra Realizada</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="sucesso">

        <div class="infossucesso">

            <h1>✅ Compra Realizada com Sucesso!</h1>

            <h2>Pedido #<?php echo $num; ?></h2>

            <p>
                <strong>Data:</strong>
                <?php echo $data; ?>
            </p>

            <p>
                <strong>Cliente:</strong>
                <?php echo $_SESSION['Nome']; ?>
            </p>

            <p>
                <strong>Pagamento:</strong>
                <?php echo $pagamento; ?>
            </p>

            <hr>

            <h2>Produtos Comprados</h2>

            <?php

foreach($_SESSION['carrinho'] as $item){

    $subtotal =
    $item['valor'] *
    $item['quantidade'];

?>

            <p>

                <?php echo $item['produto']; ?>

                -

                Qtd:
                <?php echo $item['quantidade']; ?>

                -

                R$
                <?php echo number_format($subtotal,2,",","."); ?>

            </p>

            <?php

}

?>

            <hr>

            <h2>

                Total:
                R$
                <?php echo number_format($total,2,",","."); ?>

            </h2>

            <br>

            <a href="index.php">

                <button class="botao">

                    Voltar à Loja

                </button>

            </a>

        </div>

    </div>

</body>

</html>

<?php

unset($_SESSION['carrinho']);

?>
