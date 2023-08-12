// Seleciona o elemento do header
const header = document.querySelector("header");

// Variável para armazenar a posição do scroll anterior
let lastScrollTop = 0;

// Evento de scroll da janela
window.addEventListener("scroll", () => {
    // Obtém a posição atual do scroll
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Define a propriedade de transição a cada evento de scroll
    header.style.transition = "top 0.3s ease-in-out";

    // Verifica se a posição atual do scroll é maior que a posição anterior
    if (scrollTop > lastScrollTop) {
        // Se a posição atual do scroll for maior, significa que o usuário está rolando para baixo
        header.style.top = "-10vh";
    } else {
        // Se a posição atual do scroll for menor ou igual à posição anterior, significa que o usuário está rolando para cima
        header.style.top = "0";
    }

    // Atualiza a posição anterior do scroll com a posição atual
    lastScrollTop = scrollTop;
});

document.getElementById("login").addEventListener("click", () => {
    window.location.href = "/login";
});

document.getElementById("register").addEventListener("click", () => {
    window.location.href = "/register";
});
