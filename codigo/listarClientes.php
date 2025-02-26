<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de clientes</h1>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Endereço</td>
            <td colspan="2">Ação</td>
        </tr>
            <?php
                require_once "conexao.php";

                $sql = "SELECT * FROM tb_cliente";

                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['idcliente'];
                    $nome = $linha['nome'];
                    $cpf = $linha['cpf'];
                    $endereco = $linha['endereco'];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$cpf</td>";
                    echo "<td>$endereco</td>";
                    echo "<td><a href='deletarCliente.php?id=$id'>Excluir</a></td>";
                    echo "<td><a href='formCliente.php?id=$id'>Editar</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>