function teste() {
    console.log("Presta atenção");
}


function teste2() {
    // console.log("oiiiiii");
    alert("oiiiii");
}

//desafio dessa página...
function calcular() {

    // estrutura de repetição que percorre todos os checkbox

    let marcado = document.getElementById('marcado[1]').checked;
    if (marcado == true) {

    }

    let valor1 = document.getElementById('preco[1]').innerHTML;
    let valor3 = document.getElementById('preco[3]').innerHTML;
    let quantidade1 = document.getElementById('quantidade[1]').value;
    let quantidade3 = document.getElementById('quantidade[3]').value;

    let total = valor1 * quantidade1;
    total = total + (valor3 * quantidade3);

    document.getElementById('valor_total').value = total;

    console.log("Finalizou...");
}