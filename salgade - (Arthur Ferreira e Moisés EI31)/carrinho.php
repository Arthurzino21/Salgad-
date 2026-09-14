<?php

session_start();

extract($_POST);

if(isset($qtd)){

    foreach($qtd as $indice => $quantidade){

        if(isset($_SESSION['carrinho'][$indice])){

            $_SESSION['carrinho'][$indice]['quantidade'] =
            max(1, (int)$quantidade);

        }

    }

}


if(isset($finalizar)){
    header("Location: confirmar.php");
    exit;
}

$total = 0;

?>

<!DOCTYPE html>

<html>

<head>

    <title>Carrinho</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <h1>Carrinho</h1>

    <?php

if(empty($_SESSION['carrinho'])){

?>

    <div class="card2">

        <h2>Seu carrinho está vazio.</h2>

        <br>

        <a href="index.php">

            <button type="button" class="botao">

                Voltar à Loja

            </button>

        </a>

    </div>

    <?php

}else{

?>

    <form method="POST">

        <?php

foreach($_SESSION['carrinho'] as $indice => $item){

    $subtotal =
    $item['valor'] *
    $item['quantidade'];

    $total += $subtotal;

?>

        <div class="card2">

            <h2><?php echo $item['produto']; ?></h2>

            <img src="img/<?php echo $item['imagem']; ?>" width="220" style="border-radius:10px;">

            <p>

                Valor Unitário:
                R$ <?php echo number_format($item['valor'],2,',','.'); ?>

            </p>

            <p>Quantidade:</p>

            <input type="number" name="qtd[<?php echo $indice; ?>]" value="<?php echo $item['quantidade']; ?>" min="1" class="campo-qtd">

            <p>

                Subtotal:
                R$ <?php echo number_format($subtotal,2,',','.'); ?>

            </p>

        </div>

        <?php

}

?>

        <div class="card2">

            <a href="index.php">

                <button type="button" class="botao">

                    adicionar mais itens

                </button>

            </a>

            <br>
            <br>

                <button type="submit" name="finalizar" class="botao">

                    Finalizar Compra

                </button>

            <br><br>

            <a href="limpar_carrinho.php">

                <button type="button" class="botao">

                    Limpar Carrinho

                </button>

            </a>

        </div>

    </form>

        <?php

}

?>

</body>

</html>
