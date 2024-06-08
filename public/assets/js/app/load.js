document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche la soumission par défaut du formulaire

    $('.modal').modal('hide');
    $(`#modalt`).modal('hide');
    $(`#modalt`).modal('show');

    // Si toutes les validations passent, soumettre le formulaire
    this.submit();
});

document.getElementById("form_click").addEventListener("click", function() {
    $('.modal').modal('hide');
    $(`#modalt`).modal('hide');
    $(`#modalt`).modal('show');
});