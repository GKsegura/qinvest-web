const toggleIcon = document.getElementById("theme-icon");
const header = document.querySelector("header");
const logo = document.getElementById("light-logo");

toggleDark = () => {
    toggleIcon.classList.remove("bi-sun-fill");
    toggleIcon.classList.add("bi-moon-fill");

    header.style.backgroundColor = "#000000";
    header.style.color = "#ffffff";

    logo.style.filter = "invert(1)";
};

toggleLight = () => {
    toggleIcon.classList.remove("bi-moon-fill");
    toggleIcon.classList.add("bi-sun-fill");
    header.style.backgroundColor = "#ffffff";
    header.style.color = "#000000";

    logo.style.filter = "invert(0)";
};

toggleIcon.addEventListener("click", () => {
    toggleIcon.classList.contains("bi-sun-fill") ? toggleDark() : toggleLight();
});
