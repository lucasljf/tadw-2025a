<?php

function deletarCliente($conexao, $idcliente) {
    $sql = "DELETE FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    
    return $funcionou; //true ou false
};

function listarClientes($conexao) {
    $sql = "SELECT * FROM tb_cliente";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_clientes = [];
    while ($cliente = mysqli_fetch_assoc($resultado)) {
        $lista_clientes[] = $cliente;
    }

    mysqli_stmt_close($comando);
    return $lista_clientes;
};

function salvarCliente($conexao, $nome, $cpf, $endereco) {
    $sql = "INSERT INTO tb_cliente (nome, cpf, endereco) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sss', $nome, $cpf, $endereco);
    
    mysqli_stmt_execute($comando);
    
    // retorna o valor do id que acabou de ser inserido
    $idcliente = mysqli_stmt_insert_id($comando);

    mysqli_stmt_close($comando);

    return $idcliente;
};

function editarCliente($conexao, $nome, $cpf, $endereco, $idcliente) {
    $sql = "UPDATE tb_cliente SET nome=?, cpf=?, endereco=? WHERE idcliente=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
    mysqli_stmt_bind_param($comando, 'sssi', $nome, $cpf, $endereco, $idcliente);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
};

function deletarProduto($conexao, $idproduto) {};

function listarProdutos() {};

function salvarProduto() {};

function editarProduto() {};


//desafio
function salvarUsuario() {};

function salvarVenda($conexao, $idcliente, $idproduto, $valor_total, $data) {
    $sql = "INSERT INTO tb_venda (idcliente, idproduto, valor_total, data) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'iids', $idcliente, $idproduto, $valor_total, $data);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
};

// retornar uma variável com todos os dados do cliente
function pesquisarClienteId($conexao, $idcliente) {
    $sql = "SELECT * FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $cliente = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $cliente;
};

// retornar uma variável com todos os dados do produto
function pesquisarProdutoId() {};

//mostrar o nome do cliente ao invés do id
//mostrar o nome do produto ao invés do id
function listarVendas() {};
?>
