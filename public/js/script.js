// Seleciona o elemento do header
const header = document.querySelector("header");

// Variável para armazenar a posição do scroll anterior
let lastScrollTop = 0;

// Evento de scroll da janela
window.addEventListener("scroll", () => {
    // Obtém a posição atual do scroll
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Verifica se a posição atual do scroll é maior que a posição anterior
    if (scrollTop > lastScrollTop) {
        // Se a posição atual do scroll for maior, significa que o usuário está rolando para baixo
        // Nesse caso, adiciona a classe 'sticky' ao header para que ele fique fixo
        header.classList.add("sticky");
    } else {
        // Se a posição atual do scroll for menor ou igual à posição anterior, significa que o usuário está rolando para cima
        // Nesse caso, remove a classe 'sticky' do header para que ele não fique fixo
        header.classList.remove("sticky");
    }

    // Atualiza a posição anterior do scroll com a posição atual
    lastScrollTop = scrollTop;
});
