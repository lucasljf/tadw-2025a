<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.7.1.min.js"></script>
</head>
<body>
    
    <button id="botao1" class="teste">Exemplo 1</button>
    <button id="botao2" class="teste">Exemplo 2</button>
    <button id="botao3">Exemplo 3</button>

    <script>
        function acao1() {
            alert("Executou a ação 1...");
        }

        function acao2() {
            alert("Executou a ação 2...");
        }

        // $("#botao1").click(acao1);
        // $("#botao1").click(acao2);
        
        // $("#botao2").click(acao1);
        // $("#botao2").click(acao2);

        // $("button").click(acao1);
        // $("button").click(acao2);

        $(".teste").click(acao1);
    </script>
</body>
</html>