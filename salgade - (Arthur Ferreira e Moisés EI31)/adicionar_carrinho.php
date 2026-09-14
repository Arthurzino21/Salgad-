<?php

session_start();

extract($_POST);

$valor = (float)$valor;

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

$_SESSION['carrinho'][] = [
    "produto" => $produto,
    "valor" => $valor,
    "imagem" => $imagem,
    "quantidade" => 1
];

header("Location: carrinho.php");
exit;

?>
