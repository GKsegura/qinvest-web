document.addEventListener("DOMContentLoaded", () => {
    const toggleIcon = document.getElementById("theme-icon");
    const toggleLogo = document.getElementById("theme-logo");
    const toggleHeader = document.getElementById("theme-header");

    toggleDark = () => {
        toggleIcon.classList.remove("bi-sun-fill");
        toggleIcon.classList.add("bi-moon-fill");

        toggleLogo.classList.remove("dark-logo");
        toggleLogo.classList.add("light-logo");

        toggleHeader.classList.remove("light-header");
        toggleHeader.classList.add("dark-header");
    };

    toggleLight = () => {
        toggleIcon.classList.remove("bi-moon-fill");
        toggleIcon.classList.add("bi-sun-fill");

        toggleHeader.classList.remove("dark-header");
        toggleHeader.classList.add("light-header");

        toggleLogo.classList.remove("light-logo");
        toggleLogo.classList.add("dark-logo");
    };

    toggleIcon.addEventListener("click", () => {
        toggleIcon.classList.contains("bi-sun-fill")
            ? toggleDark()
            : toggleLight();
    });
});
