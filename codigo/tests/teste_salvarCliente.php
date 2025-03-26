<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "Teste automatico";
$cpf = "000.000.000-00";
$endereco = "Rua Automatico";

$idcliente = salvarCliente($conexao, $nome, $cpf, $endereco);

echo $idcliente;
