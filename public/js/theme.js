//variáveis
const toggleIcon = document.getElementById("theme-icon"); //const do ícone de tema
const toggleLogo = document.getElementById("theme-logo"); //const da logo
const primaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue("--primary-color")
    .trim(); //const da váriavel "primary-color" do css "style.css"
const secondaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue("--secondary-color")
    .trim(); //const da váriavel "primary-color" do css "style.css"
const transition = getComputedStyle(document.documentElement)
    .getPropertyValue("--transition")
    .trim(); //const da variável "--transition" do css "style.css"
const lightColor = "#ffffff"; //const com o valor padrão da cor clara
const darkColor = "#212121"; //const com o valor padrão da cor escura

const transitionNone = "none"; //sem transição
const transitionProperties1 = "background-color"; // primeira propriedade da transição
const transitionProperties2 = "color"; // segunda propriedade de transição
const transitionDuration = "0.4s"; // duração da transição
const transitionTimingFunction = "ease"; // função de tempo da transição
const defaultTransition = `${transitionProperties1} ${transitionDuration} ${transitionTimingFunction}, ${transitionProperties2} ${transitionDuration} ${transitionTimingFunction}`;

//funções
const toggleDark = (newTransition) => {
    toggle(
        toggleIcon,
        "bi-sun-fill",
        "bi-moon-fill",
        1,
        darkColor,
        lightColor,
        newTransition
    );
    setThemeCookie("dark");
    updateTransition();
}; // função que coloca no modo escuro

const toggleLight = (newTransition) => {
    toggle(
        toggleIcon,
        "bi-moon-fill",
        "bi-sun-fill",
        0,
        lightColor,
        darkColor,
        newTransition
    );
    setThemeCookie("light");
    updateTransition();
}; // função que coloca no modo claro

const toggle = (
    element,
    current,
    next,
    logoValue,
    primaryColor,
    secondaryColor,
    newTransition
) => {
    element.classList.remove(current);
    element.classList.add(next);

    toggleLogo.style.filter = `invert(${logoValue})`;

    document.documentElement.style.setProperty("--transition", newTransition);

    document.documentElement.style.setProperty("--primary-color", primaryColor);
    document.documentElement.style.setProperty(
        "--secondary-color",
        secondaryColor
    );
};

const setThemeCookie = (theme) => {
    document.cookie = "theme=" + theme + ";path=/";
}; //função que define o cookie com o valor do tema escolhido

const getThemeFromCookie = () => {
    const cookies = document.cookie.split("; ");
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split("=");
        if (cookie[0] === "theme") {
            return cookie[1];
        }
    }
    return null;
}; //função que pesquise o cookie "theme" e retorne seu valor

document.addEventListener("DOMContentLoaded", function () {
    const theme = getThemeFromCookie();

    if (theme === "light") {
        toggleLight(transitionNone);
    } else if (theme === "dark") {
        toggleDark(transitionNone);
    } else {
        toggleLight(transitionNone);
    }
});

toggleIcon.addEventListener("click", () => {
    toggleIcon.classList.contains("bi-sun-fill")
        ? toggleDark(defaultTransition)
        : toggleLight(defaultTransition);
}); //função que pega o evento click e troca o tema

const updateTransition = () => {
    setTimeout(function () {
        document.documentElement.style.setProperty(
            "--transition",
            defaultTransition
        );
    }, 0);
};
