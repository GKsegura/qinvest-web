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
const weak = document.querySelector(".weak");
const average = document.querySelector(".average");
const strong = document.querySelector(".strong");
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

        // Verificar o comprimento da senha
        if (password.value.length >= 8) {
            validation += 1;
            // Verificar a presença de letras maiúsculas, letras minúsculas, números e símbolos
            if (password.value.match(capitalLetters)) {
                validation += 1;
            }
            if (password.value.match(numbers)) {
                validation += 1;
            }
            if (password.value.match(symbols)) {
                validation += 1;
            }
        }

        if (validation == 1) {
            weak.classList.add("active");
            textPassword.style.display = "block";
            textPassword.textContent = "Senha fraca";
            textPassword.classList.add("weak");
        }

        if (validation == 2) {
            average.classList.add("active");
            textPassword.style.display = "block";
            textPassword.textContent = "Senha média";
            textPassword.classList.add("average");
        } else {
            average.classList.remove("active");
            textPassword.classList.remove("average");
        }

        if (validation == 3) {
            strong.classList.add("active");
            textPassword.style.display = "block";
            textPassword.textContent = "Senha forte";
            textPassword.classList.add("strong");
        } else {
            strong.classList.remove("active");
            textPassword.classList.remove("strong");
        }

        if (validation == 4) {
        }
    } else {
        passwordStrengthBar.style.display = "none";
        textPassword.style.display = "none";
        eyeIconPassword.style.display = "none";
        eyeIconConfirmPassword.style.display = "none";
        validation = 0;
    }

    console.log(validation);
};
