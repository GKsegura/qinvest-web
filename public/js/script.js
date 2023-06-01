var btnTema = document.getElementById("btnTema");
btnTema.addEventListener("click", trocarTema);

function trocarTema() {
    var themeIcon = document.getElementById("theme-icon");
    var header = document.getElementById("header");
    var logo = document.getElementById("logo");

    if (header.classList.contains("header-claro")) {
        header.classList.remove("header-claro");
        header.classList.add("header-escuro");
    } else if (header.classList.contains("header-escuro")) {
        header.classList.remove("header-escuro");
        header.classList.add("header-claro");
    }

    if (logo.classList.contains("logo-claro")) {
        logo.classList.remove("logo-claro");
        logo.classList.add("logo-escuro");
    } else if (logo.classList.contains("logo-escuro")) {
        logo.classList.remove("logo-escuro");
        logo.classList.add("logo-claro");
    }

    if (themeIcon.classList.contains("bi-sun-fill")) {
        themeIcon.classList.remove("bi-sun-fill");
        themeIcon.classList.add("bi-moon-fill");
    } else if (themeIcon.classList.contains("bi-moon-fill")) {
        themeIcon.classList.remove("bi-moon-fill");
        themeIcon.classList.add("bi-sun-fill");
    }
}
