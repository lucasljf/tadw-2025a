<?php
    require_once "verificaLogado.php";

    $nome_usuario = $_SESSION['nome'];
    $tipo_usuario = $_SESSION['tipo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página inicial</h1>

    <p>Olá, <?php echo $nome_usuario . "."; ?></p>
    <ul>
        <li>
        <a href="formCliente.php">Cadastrar novo cliente</a>
        </li>

        <?php
            if ($tipo_usuario == 'g') {
                echo "<li>";
                echo "<a href='listarClientes.php'>Lista de clientes cadastrados</a>";
                echo "</li>";
            }
        ?>

        <li>
            <a href="formProduto.php">Cadastrar novo produto</a>
        </li>
        <li>
            <a href="listarProdutos.php">Lista de produtos cadastrados</a>
        </li>
        <li>
            <a href="deslogar.php">Sair</a>
        </li>
    </ul>
</body>
</html>
