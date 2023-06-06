//variáveis
const toggleIcon = document.getElementById("theme-icon"); //const do ícone de tema
const toggleLogo = document.getElementById("theme-logo"); //const da logo
const primaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue("--primary-color")
    .trim(); //const da váriavel "primary-color" do css "style.css"
const secondaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue("--secondary-color")
    .trim(); //const da váriavel "primary-color" do css "style.css"
const lightColor = "#ffffff"; //const com o valor padrão da cor clara
const darkColor = "#212121"; //const com o valor padrão da cor escura
const header = document.getElementsByClassName("header-color");

//funções
const toggleDark = () => {
    toggle(toggleIcon, "bi-sun-fill", "bi-moon-fill", 1, darkColor, lightColor);
    setThemeCookie("dark");
}; // função que coloca no modo escuro

const toggleLight = () => {
    toggle(toggleIcon, "bi-moon-fill", "bi-sun-fill", 0, lightColor, darkColor);
    setThemeCookie("light");
}; // função que coloca no modo claro

const toggle = (
    element,
    current,
    next,
    logoValue,
    primaryColor,
    secondaryColor,
    bool
) => {
    element.classList.remove(current);
    element.classList.add(next);

    toggleLogo.style.filter = `invert(${logoValue})`;

    document.documentElement.style.setProperty("--primary-color", primaryColor);
    document.documentElement.style.setProperty(
        "--secondary-color",
        secondaryColor
    );
};

document.addEventListener("DOMContentLoaded", () => {
    toggleIcon.addEventListener("click", () => {
        toggleIcon.classList.contains("bi-sun-fill")
            ? toggleDark()
            : toggleLight();
    }); //função que pega o evento click e troca o tema
}); //função que só carrega o js quando o site é completamente carregado

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

window.addEventListener("load", function () {
    const theme = getThemeFromCookie();

    if (theme === "light") {
        toggleLight();
    } else if (theme === "dark") {
        toggleDark();
    } else {
        toggleLight();
    }
});
