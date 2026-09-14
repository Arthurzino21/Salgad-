<?php

session_start();

include "arq/cons.php";
require_once "arq/DLL.php";

extract($_POST);

$senha = md5($senha);

$consulta = "SELECT * FROM logins WHERE login = '$login' AND senha = '$senha'";
$resultado = banco($server, $user, $password, $db, $consulta);

if($linha = $resultado->fetch_assoc()){

    $cpf = $linha['cpf'];

    $consulta2 = "SELECT * FROM usuarios WHERE cpf = '$cpf'";
    $resultado2 = banco($server, $user, $password, $db, $consulta2);
    $usuario = $resultado2->fetch_assoc();

    $_SESSION['Logado'] = "ok";
    $_SESSION['Nome']   = $usuario['nome'];
    $_SESSION['CPF']    = $cpf;

    header("Location: index.php");
    exit;

}

header("Location: erro.php");
exit;

?>
