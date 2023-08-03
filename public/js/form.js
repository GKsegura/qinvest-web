// olho para ver senha
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
};

eyeIconPassword.addEventListener("click", () => {
    showHide(password, eyeIconPassword);
});

eyeIconConfirmPassword.addEventListener("click", () => {
    showHide(confirmPassword, eyeIconConfirmPassword);
});

// força de senha
const passwordStrengthBar = document.querySelector(".password-strength-bar");
//password já está declarado para a outra função
const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const textPassword = document.querySelector(".text-password ");

const capitalLetters = /[A-Z]/;
const smallLetters = /[a-z]/;
const numbers = /[0-9]/;
const symbols = /[!,@,#,$,%,^,&,*,?,_,~,\-,(,)]/;

const passwordValidator = () => {
    let validation = 0;

    if (password.value !== "") {
        passwordStrengthBar.style.display = "flex";
        eyeIconPassword.style.display = "inline-block";
        eyeIconConfirmPassword.style.display = "inline-block";

        if (password.value.length < 8) {
            validation = 1;
        } else if (password.value.length >= 8) {
            validation = 2;
            if (
                password.value.match(capitalLetters) &&
                password.value.match(smallLetters)
            ) {
                validation = 3;
                if (
                    password.value.match(numbers) &&
                    password.value.match(symbols)
                ) {
                    validation = 4;
                }
            }
        }

        console.log(validation, password.value.length);

        // if (validation == 2) {
        //     average.classList.add("active");
        //     textPassword.style.display = "block";
        //     textPassword.textContent = "Senha média";
        //     textPassword.classList.add("average");
        // } else {
        //     average.classList.remove("active");
        //     textPassword.classList.remove("average");
        // }
    } else {
        passwordStrengthBar.style.display = "none";
        eyeIconPassword.style.display = "none";
        eyeIconConfirmPassword.style.display = "none";
        textPassword.style.display = "none";
    }
};
