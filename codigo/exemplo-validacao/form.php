<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.7.1.min.js"></script>
    <script src="../jquery.validate.min.js"></script>
    <style>
        .error {
            color: blue;
        }
    </style>
    <script>
        // programar a validação do formulário
        $('document').ready(function () {
            $('#formulario').validate({
                rules: {
                    nome: {
                        required: true,
                        minlength: 3,
                    },
                    usuario: {
                        required: true,
                        minlength: 5,
                    },
                    senha: {
                        minlength: 8,
                        required: true,    
                    },
                    senha2: {
                        equalTo: '#senha',
                    }
                },
                messages: {
                    nome: {
                        required: "Esse campo não pode ser vazio",
                        minlength: "Tamanho mínimo de 3 símbolos"
                    },
                    senha2: {
                        equalTo: "As senhas não são iguais."
                    }
                }
            })
        })
    </script>
</head>
<body>
    <h1>Cadastro de usuário</h1>

    <form id="formulario" action="saida.php">

        Nome: <br>
        <input type="text" name="nome" id="nome"> <br><br>
        
        Nome de usuário: <br>
        <input type="text" name="usuario" id="usuario"> <br><br>
        
        E-mail: <br>
        <input type="email" id="email"> <br><br>

        Confirmar de e-mail: <br>
        <input type="text" id="email2"> <br><br>

        Senha: <br>
        <input type="text" name="senha" id="senha"> <br><br>

        Confirmar senha: <br>
        <input type="text" name="senha2" id="senha2"> <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
