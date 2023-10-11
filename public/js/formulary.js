const validarFormulario = () => {
    toastr.options = {
        progressBar: false,
        closeButton: true,
    };

    correct = true;
    questions = [];
    for (let i = 1; i <= 6; i++) {
        if (
            !document.querySelector(`input[name="selected_answer${i}"]:checked`)
        ) {
            correct = false;
            questions[i - 1] = i;
        }
    }
    if (!correct) {
        alert(questions);
    }
    // toastr.error("Responda todas as questões", "Erro");
    return correct;
};
