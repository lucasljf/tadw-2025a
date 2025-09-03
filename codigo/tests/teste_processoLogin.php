<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $email = "lucas@gmail.com";
    $senha = "abc123";

    $idusuario = verificarLogin($conexao, $email, $senha);

    echo "<pre>";
    print_r($idusuario);
    echo "</pre>";
    
    echo "<hr>";
    
    $usuario = pegarDadosUsuario($conexao, $idusuario);
    echo "<pre>";
    print_r($usuario);
    echo "</pre>";

?>
