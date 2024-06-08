@extends('app')

@section('titre', 'Mise à jour')

@section('option_btn')

@endsection

@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content" style="margin: 0px auto;">
                                <h3 class="text-center">
                                    <span>Modification</span>
                                    <em class="icon ni ni-edit"></em>
                                </h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('index_listeprocessus') }}" class="btn btn-danger btn-outline-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Retour</span>
                                </a>
                                <a href="{{ route('index_listeprocessus') }}" class="btn btn-danger btn-outline-white d-inline-flex d-sm-none">
                                    <em class="icon ni ni-arrow-left"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block ">
                                <div class="row g-gs align-items-center justify-content-center" >
                                    <div class="col-md-10 col-xxl-10 "  >
                                        <div class="card card-bordered ">
                                            <div class="card-inner">
                                                <form id="form" method="post" action="{{ route('processus_modif') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input name="id" value="{{ $processu->id }}" type="text" class="form-control" style="display: none;">
                                                    <div class="row g-4 mb-4" id="objectifs-container" >
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-full-name">
                                                                    Fichier ( .pdf )
                                                                </label>
                                                                <input autocomplete="off" id="fileInput" name="pdfFile" accept=".pdf" type="file" class="form-control" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group text-center">
                                                                <label class="form-label" for="Cause">
                                                                    Nom du processus
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input placeholder="Saisie obligatoire" autocomplete="off" required name="nprocessus" type="text" class="form-control text-center" id="Cause" oninput="this.value = this.value.toUpperCase()" value="{{ $processu->nom}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group text-center">
                                                                <label class="form-label" for="description">
                                                                    Finalité
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input placeholder="Saisie obligatoire" autocomplete="off" required type="text" class="form-control text-center description" name="finalite" value="{{ $processu->finalite}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group text-center">
                                                                <label class="form-label" for="description">
                                                                    Description
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <textarea name="description" class="form-control no-resize" id="default-textarea">{{ $processu->description}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @foreach ($objectifData[$processu->id] as $key => $objectifDat)
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="Cause">
                                                                    Objectif {{ $key+1 }}
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    <input name="objectifs[]" value="{{ $objectifDat['objectif'] }}" type="text" class="form-control" id="Cause">
                                                                    <input name="id_objectifs[]" value="{{ $objectifDat['id'] }}" type="text" style="display: none;">
                                                                </div>

                                                                <div class="custom-control custom-checkbox mt-4">
                                                                    <input value="{{ $objectifDat['id'] }}" name="id_suppr[{{$key+1}}]" type="text" style="display: none;">
                                                                    <input name="suppr[{{$key+1}}]" value="oui" type="checkbox" class="custom-control-input" id="customCheck1_{{$key+1}}">
                                                                    <label class="custom-control-label" for="customCheck1_{{$key+1}}">
                                                                        Supprimé
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div class="col-lg-4">
                                                            <div class="form-group text-center">
                                                                <a class="btn btn-lg btn-dim btn-primary" id="ajouter-objectif">
                                                                    <em class="ni ni-plus me-2"></em>
                                                                    <em>Objectif</em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group text-center">
                                                                <a data-bs-toggle="modal" data-bs-target="#modalDetail" class="btn btn-lg btn-warning btn-dim">
                                                                    <em class="ni ni-eye me-2"></em>
                                                                    <em>Voir le fichier</em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group text-center">
                                                                <button type="submit" class="btn btn-lg btn-dim btn-success">
                                                                    <em class="ni ni-check me-2"></em>
                                                                    <em>Mise à jour</em>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('ajouter-objectif').addEventListener('click', function(event) {
            event.preventDefault();
            const container = document.getElementById('objectifs-container');
            const div = document.createElement('div');
            div.classList.add('col-lg-12');
            div.innerHTML = `
            <div class="row g-g2" >
                <div class=" col-md-12 form-group">
                    <label class="form-label" for="Cause">
                        Objectif
                    </label>
                    <div class="form-control-wrap">
                        <input placeholder="Saisie obligatoire" autocomplete="off" required type="text" class="form-control text-center objectif me-2" name="objectifs[]">
                        <input name="id_objectifs[]" value="0" type="text" style="display: none;">
                    </div>
                </div>
                <div class=" col-md-12 form-group">
                    <div class="form-control-wrap ">
                        <button type="button" class="btn btn-danger btn-dim text-center btn-remove-objectif">
                            <em class="ni ni-trash me-2"></em>
                            <em>Supprimer</em>
                        </button>
                    </div>
                </div>
            </div>
            `;
            container.appendChild(div);

            // Ajouter un écouteur d'événement pour supprimer l'objectif
            div.querySelector('.btn-remove-objectif').addEventListener('click', function() {
                container.removeChild(div);
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const checkboxesCause = document.querySelectorAll('input[name^="suppr["]');

            checkboxesCause.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const checkedCount = document.querySelectorAll('input[name^="suppr["]:checked').length;

                    if (checkedCount === checkboxesCause.length) {
                        // Si toutes les cases sont cochées, décocher la dernière case cochée
                        checkbox.checked = false;

                        NioApp.Toast("<h5>information</h5><p>Impossible de supprimer cet objectif.</p>", "info", {position: "top-right"});
                    }
                });
            });
        });
    </script>

    <div class="modal fade zoom" tabindex="-1" id="modalDetail">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" id="pdfPreviewmodal" style="height:700px;" data-simplebar>
                <p class="text-center mt-2">Aucun fichier</p>
            </div>
        </div>
    </div>

    <script>
        const fileInput = document.getElementById('fileInput');
        const pdfPreview = document.getElementById('pdfPreviewmodal');

        var pdfFiles = @json($pdfFiles);

        fileInput.addEventListener('change', function() {
            // Initialiser la variable trouver
            let trouver = 0;
            var selectedFileName = this.value.split('\\').pop(); // Récupérer le nom du fichier sélectionné
            // Parcourir la liste des fichiers
            pdfFiles.forEach(function(pdfFile) {
                if (selectedFileName === pdfFile.pdf_nom) {
                    NioApp.Toast("<h5>information</h5><p>Ce fichier PDF existe déjà.</p>", "info", {position: "top-right"});
                    fileInput.value = ''; // Vider l'input
                    trouver = 1;
                    
                    pdfPreview.innerHTML = '';
                    fileSizeElement.textContent = '';
                }
            });
            // Vérifier la valeur de trouver avant de procéder
            if (trouver === 0) {
                // Obtenez le fichier PDF sélectionné
                const fichier = fileInput.files[0];
                // Vérifiez si un fichier a été sélectionné
                if (fichier) {
                    // Créez un élément d'incorporation pour le fichier PDF
                    const embedElement = document.createElement('embed');
                    embedElement.src = URL.createObjectURL(fichier);
                    embedElement.type = 'application/pdf';
                    embedElement.style.width = '100%';
                    embedElement.style.height = '100%';
                    // Affichez l'élément d'incorporation dans la div de prévisualisation
                    pdfPreview.innerHTML = '';
                    pdfPreview.appendChild(embedElement);
                }
            }
        });
    </script>




@endsection
