<?php

include "arq/cons.php";
require_once "arq/DLL.php";

extract($_POST);

$senha_md5 = md5($senha);

$consulta = "INSERT INTO logins (login, senha, cpf)
             VALUES ('$login', '$senha_md5', '$cpf')";

banco($server, $user, $password, $db, $consulta);

header("Location: login.php");
exit;

?>
