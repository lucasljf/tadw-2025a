<?php
    require_once "conexao.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM tb_cliente WHERE idcliente = $id";

    mysqli_query($conexao, $sql);
?>