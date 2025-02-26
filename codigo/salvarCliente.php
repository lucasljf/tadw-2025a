<?php
require_once "conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];

if ($id == 0) {
    $sql = "INSERT INTO tb_cliente (nome, cpf, endereco) VALUES (?, ?, ?)";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sss', $nome, $cpf, $endereco);
} else {
    $sql = "UPDATE tb_cliente SET nome=?, cpf=?, endereco=? WHERE idcliente=?";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssi', $nome, $cpf, $endereco, $id);
}
mysqli_stmt_execute($comando);

mysqli_stmt_close($comando);
