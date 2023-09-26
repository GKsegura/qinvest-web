// import Cookies from "js-cookie";
import Cookies from "js-cookie";
/**
 * função que define o cookie com o valor do tema escolhido
 * @param {String} theme
 */
const setThemeCookie = (theme) => {
    Cookies.set("theme", theme, { path: "/" });
};

/**
 * função que pesquise o cookie "theme" e retorne seu valor
 * @returns
 */
const getThemeFromCookie = () => {
    return Cookies.get("theme");
};

export { getThemeFromCookie, setThemeCookie };
