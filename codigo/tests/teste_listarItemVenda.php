<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$idvenda = 4;

echo "<pre>";
print_r(listarItemVenda($conexao, $idvenda));
echo "</pre>";

?>