<?php
require_once "conexao.php";
require_once "funcoes.php";

$idcliente = $_GET['idcliente'];
$total = $_GET['valor_total'];
$data = $_GET['data_compra'];

$idproduto = $_GET['idproduto'];
$quantidade = $_GET['quantidade']; 

foreach ($idproduto as $produto) {
    $produtos[] = [$produto, $quantidade[$produto]];
}


// processo de salvamento
$idvenda = salvarVenda($conexao, $idcliente, $total, $data);

foreach ($produtos as $p) {
    salvarItemVenda($conexao, $idvenda, $p[0], $p[1]);
}
?>
