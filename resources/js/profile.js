document.addEventListener("DOMContentLoaded", function () {
    const profileDisplay = document.getElementById("profile-display");
    const editForm = document.getElementById("edit-form");
    const editButton = document.getElementById("edit-button");

    editButton.addEventListener("click", function () {
        profileDisplay.style.display = "none";
        editForm.style.display = "block";
    });
});
