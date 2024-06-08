// Cette fonction affiche le modal après un délai de 2 minutes
function afficherModalApresDelai() {
    $('.modal').modal('hide'); // Assurez-vous que les modaux précédents sont masqués
    $('#modalAlert2').modal('show'); // Affiche le modal spécifié
    // Vous pouvez également ajouter d'autres opérations à effectuer après l'affichage du modal ici
}
// Utilise setTimeout() pour déclencher la fonction après un délai de 2 minutes
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(afficherModalApresDelai, 900000); // 120000 millisecondes = 2 minutes
});

document.getElementById('logoutBtn').addEventListener('click', function(event) {
                event.preventDefault(); // Pour éviter le comportement par défaut du lien
                window.location.reload();
            });
