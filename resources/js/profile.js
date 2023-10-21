// script.js
document.addEventListener('DOMContentLoaded', function () {
    const profileDisplay = document.getElementById('profile-display');
    const editForm = document.getElementById('edit-form');
    const editButton = document.getElementById('edit-button');

    editButton.addEventListener('click', function () {
        profileDisplay.style.display = 'none';
        editForm.style.display = 'block';
    });
});

// script.js
document.addEventListener('DOMContentLoaded', function () {
    // Obtém o elemento que contém o perfil do investidor
    const profileType = document.querySelector('.profile-type i');

    // Obtém o texto do perfil do investidor
    const perfilInvestidor = profileType.textContent;

    // Define a cor com base no perfil
    if (perfilInvestidor === 'Moderado') {
        profileType.style.color = '#9E63FF';
    } else if (perfilInvestidor === 'Agressivo') {
        profileType.style.color = '#F62E2E';
    } else if (perfilInvestidor === 'Conservador') {
        profileType.style.color = '#55C2FF';
    }
});
