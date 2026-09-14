<?php

include "arq/cons.php";
require_once "arq/DLL.php";

extract($_POST);

$consulta = "INSERT INTO usuarios (cpf, nome, endereco, bairro, cidade, estado, cep)
             VALUES ('$cpf', '$nome', '$endereco', '$bairro', '$cidade', '$estado', '$cep')";

banco($server, $user, $password, $db, $consulta);

header("Location: cadastro2.php?cpf=".$cpf);
exit;

?>
