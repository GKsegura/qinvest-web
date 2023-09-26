import { getThemeFromCookie, setThemeCookie } from "../lib/cookies";
// import {}

//variáveis

/* const do ícone de tema */
const toggleIcon = document.getElementById("theme-icon");
/* const da logo */
const toggleLogo = document.getElementById("theme-logo");

/*  const com o valor padrão da cor clara*/
const lightColor = "#ffffff";

/* const com o valor padrão da cor escura */
const darkColor = "#121927";

/* sem transição */
const transitionNone = "none";
/*  primeira propriedade da transição */
const transitionProperties1 = "background-color";
/* segunda propriedade de transição */
const transitionProperties2 = "color";
/* duração da transição */
const transitionDuration = "0.4s";
/* função de tempo da transição */
const transitionTimingFunction = "ease";
/* transição padrão do css */
const defaultTransition = `${transitionProperties1} ${transitionDuration} ${transitionTimingFunction}, ${transitionProperties2} ${transitionDuration} ${transitionTimingFunction}`;

//funções

/**
 * função que coloca no modo escuro
 * @param {String} newTransition
 */
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
};

/**
 * função que coloca no modo claro
 * @param {String} newTransition
 */
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
};

/**
 *
 * @param {Element} element
 * @param {String} current
 * @param {String} next
 * @param {Number} logoValue
 * @param {String} primaryColor
 * @param {String} secondaryColor
 * @param {Element} newTransition
 */
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

/**
 *
 */
document.addEventListener("DOMContentLoaded", () => {
    const theme = getThemeFromCookie();
    theme == "light" ? toggleLight(transitionNone) : toggleDark(transitionNone);
});

/**
 *  Evento click que troca o tema
 */
toggleIcon.addEventListener("click", () => {
    toggleIcon.classList.contains("bi-sun-fill")
        ? toggleDark(defaultTransition)
        : toggleLight(defaultTransition);
});

/**
 *
 */
const updateTransition = () => {
    setTimeout(() => {
        document.documentElement.style.setProperty(
            "--transition",
            defaultTransition
        );
    }, 0);
};
