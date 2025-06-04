<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvarVenda.php">
        Cliente: <br>
        <select name="idcliente">
        <?php
            require_once "conexao.php";
            require_once "funcoes.php";

            $lista_clientes = listarClientes($conexao);

            foreach ($lista_clientes as $cliente) {
                $idcliente = $cliente['idcliente'];
                $nome = $cliente['nome'];

                echo "<option value='$idcliente'>$nome</option>";
            }
        ?>
        </select>
        
        <br><br>

        Valor Total: <br>
        <input type="text" name="valor_total"><br><br>

        Data: <br>
        <input type="date" name="data_compra"><br><br>

        Produtos: <br>
        <?php
            $lista_produtos = listarProdutos($conexao);

            foreach ($lista_produtos as $produto) {
                $idproduto = $produto['idproduto'];
                $nome = $produto['nome'];

                echo "<input type='checkbox' value='$idproduto' name='idproduto[]'>$nome ";
                echo "<input type='text' name='???'><br>";
            }
        ?>
        <br>
        <input type="submit" value="Registrar Venda">
    </form>
</body>
</html>