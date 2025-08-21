<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="botao1">Exemplo 1</button>
    <button onclick="acao1()">Exemplo 2</button>
    
    <script>
        function acao1() {
            alert("Executou a ação 1...");
        }

        function acao2() {
            alert("Executou a ação 2...");
        }

        // document.getElementById("botao1").onclick = acao1;
        // document.getElementById("botao1").onclick = acao2;
        
        // boa prática
        document.getElementById("botao1").addEventListener("click", acao1);
        document.getElementById("botao1").addEventListener("click", acao2);

    </script>
</body>
</html>