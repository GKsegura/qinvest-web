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
    toggle(
        toggleIcon,
        "bi-sun-fill",
        "bi-moon-fill",
        toggleLogo,
        1,
        darkColor,
        lightColor
    );

    // toggleLogo.style.filter = "invert(1)";
    // document.documentElement.style.setProperty("--primary-color", darkColor);
    // document.documentElement.style.setProperty("--secondary-color", lightColor);
};

toggleLight = () => {
    toggle(
        toggleIcon,
        "bi-moon-fill",
        "bi-sun-fill",
        toggleLogo,
        0,
        lightColor,
        darkColor
    );

    // toggleLogo.style.filter = "invert(0)";
    // document.documentElement.style.setProperty("--primary-color", lightColor);
    // document.documentElement.style.setProperty("--secondary-color", darkColor);
};

const toggle = (
    object,
    current,
    next,
    logo,
    value,
    primaryColor,
    secondaryColor
) => {
    object.classList.remove(current);
    object.classList.add(next);

    logo.style.filter = `invert(${value})`;

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
