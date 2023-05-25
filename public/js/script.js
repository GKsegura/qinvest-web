var btnTema = document.getElementById("btnTema");
btnTema.addEventListener("click", trocarTema);

function trocarTema() {
    var header = document.getElementById("header");

    if (header.classList.contains("header-claro")) {
        header.classList.remove("header-claro");
        header.classList.add("header-escuro");
    } else if (header.classList.contains("header-escuro")) {
        header.classList.remove("header-escuro");
        header.classList.add("header-claro");
    }
}
