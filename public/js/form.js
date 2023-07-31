const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
const eyeIconPassword = document.getElementById("eye-icon-password");
const eyeIconConfirmPassword = document.getElementById(
    "eye-icon-confirm-password"
);

const showHide = (input, element) => {
    if (input.type == "password") {
        input.type = "text";
        element.classList.remove("bi-eye");
        element.classList.add("bi-eye-slash");
    } else if (input.type == "text") {
        input.type = "password";
        element.classList.remove("bi-eye-slash");
        element.classList.add("bi-eye");
    }

    console.log("passei");
};

eyeIconPassword.addEventListener("click", () => {
    showHide(password, eyeIconPassword);
});

eyeIconConfirmPassword.addEventListener("click", () => {
    showHide(confirmPassword, eyeIconConfirmPassword);
});
