<button id="meuBotao">Clique Aqui</button>;

function trocarClasse() {
    var elemento = document.getElementById("elementoParaTrocar");
    elemento.classList.toggle("novaClasse");
}

var meuBotao = document.getElementById("meuBotao");
meuBotao.addEventListener("click", trocarClasse);
