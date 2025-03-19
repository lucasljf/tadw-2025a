<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idcliente = 1;
$nome = "Fulanooooo";
$endereco = "Rua Fulano";
$cpf = "111.111.111-11";

editarCliente($conexao, $nome, $cpf, $endereco, $idcliente);