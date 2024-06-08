document.getElementById('ajouter-poste').addEventListener('click', function(event) {
    event.preventDefault();
    const container = document.getElementById('poste-container');
    const div = document.createElement('div');
    div.classList.add('col-lg-12');
    div.innerHTML = `
                <div class="row g-g2" >
                    <div class=" col-md-12 form-group">
                        <div class="form-control-wrap">
                            <input placeholder="Saisie obligatoire" autocomplete="off" required type="text" class="form-control text-center objectif me-2" name="nom[]" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class=" col-md-12 form-group text-center">
                        <div class="form-control-wrap">
                            <button type="button" class="btn btn-danger btn-dim text-center btn-remove-poste">
                                <em class="ni ni-trash me-2"></em>
                                <em>Supprimer</em>
                            </button>
                        </div>
                    </div>
                </div>
                `;
    container.appendChild(div);

    // Ajouter un écouteur d'événement pour supprimer l'objectif
    div.querySelector('.btn-remove-poste').addEventListener('click', function() {
        container.removeChild(div);
    });
});




