//pesquisar parte de cookies

const toggleIcon = document.getElementById("theme-icon");
const toggleLogo = document.getElementById("theme-logo");
const primaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue("--primary-color")
    .trim();
const secondaryColor = getComputedStyle(document.documentElement)
    .getPropertyValue("--secondary-color")
    .trim();
const lightColor = "#ffffff";
const darkColor = "#212121";

toggleDark = () => {
    toggle(toggleIcon, "bi-sun-fill", "bi-moon-fill", 1, darkColor, lightColor);
};

toggleLight = () => {
    toggle(toggleIcon, "bi-moon-fill", "bi-sun-fill", 0, lightColor, darkColor);
};

const toggle = (
    element,
    current,
    next,
    logoValue,
    primaryColor,
    secondaryColor
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
    });
});
