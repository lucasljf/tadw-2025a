<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="funcoes.js"></script>

<body>
    <form action="salvarVenda.php">
        Cliente: <br>
        <select name="idcliente" id="idcliente">
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

        Data: <br>
        <input type="date" name="data_compra"><br><br>

        Produtos: <br>
        <?php
        $lista_produtos = listarProdutos($conexao);

        foreach ($lista_produtos as $produto) {
            $idproduto = $produto['idproduto'];
            $nome = $produto['nome'];
            $preco = $produto['preco_venda'];

            echo "<input type='checkbox' value='$idproduto' id='marcado[$idproduto]' name='idproduto[]'>R$ <span id='preco[$idproduto]'>$preco</span> - $nome ";
            echo "<input type='text' name='quantidade[$idproduto]' id='quantidade[$idproduto]' value='0' onchange='calcular()'><br>";
        }
        ?>
        <br>
        Valor Total: <br>
        <input type="text" name="valor_total" id="valor_total" disabled><br><br>

        <input type="submit" value="Registrar Venda"> <br>

    </form>
    <button onclick="teste2()">Botão de testes</button>
</body>

</html>