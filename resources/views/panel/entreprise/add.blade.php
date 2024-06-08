@extends('app_panel')

@section('titre', 'Nouvelle entreprise')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Création d'entreprise</h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-12-12" >
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="" >
<form class="nk-stepper stepper-init nk-stepper-s1 form-validate" action="#" id="stepper-create-project">
    <div class="row g-0 col-sep col-sep-md col-sep-xl">
        <div class="col-md-4 col-xl-4">
            <div class="card-inner">
                <ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-vr">
                    <li>
                        <div class="step-item">
                            <div class="step-text">
                                <div class="lead-text">Informations de base</div>
                                <div class="sub-text">Saisir les informations de l'entreprise</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="step-item">
                            <div class="step-text">
                                <div class="lead-text">Secteur d'activité</div>
                                <div class="sub-text">Selectionné les secteur d'activté de l'entreprise</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="step-item">
                            <div class="step-text">
                                <div class="lead-text">Adresse</div>
                                <div class="sub-text">Saisir les differentes adresse de l'entreprise</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="step-item">
                            <div class="step-text">
                                <div class="lead-text">Choix abonnement</div>
                                <div class="sub-text">Choisir l'abonnement qui convient a l'entreprise</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 col-xl-8">
            <div class="card-inner">
                <div class="nk-stepper-content">
                    <div class="nk-stepper-steps stepper-steps">
                        <div class="nk-stepper-step">
                            <h5 class="title mb-3">Informations de base</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Nom de l'entreprise</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="nom" name="nom" required data-msg="Saisir obligatoire"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Email de l'entreprise</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="email" name="email" required data-msg="Saisir obligatoire"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="cp1-project-name">Contact de l'entreprise</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="tel" name="tel" required data-msg="Saisir obligatoire"></div>
                                        <script>
                                            var inputElement = document.getElementById('tel');
                                            inputElement.addEventListener('input', function() {
                                                // Supprimer tout sauf les chiffres
                                                this.value = this.value.replace(/[^0-9]/g, '');

                                                // Limiter la longueur à 10 caractères
                                                if (this.value.length > 10) {
                                                    this.value = this.value.slice(0, 10);
                                                }
                                            });
                                        </script>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Site web de l'entreprise ( facultatif )</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="site" name="site" ></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-lead">Type d'entreprise</label>
                                        <div class="form-control-wrap"><select class="form-select js-select2" id="select0" name="select0" data-placeholder="Select Lead" required data-msg="Saisir obligatoire">
                                                <option value=""></option>
                                                <option value="Keith_Jensen">Keith Jensen</option>
                                                <option value="Stefan_Zakrisson">Stefan Zakrisson</option>
                                                <option value="Daisy_Morgan">Daisy Morgan</option>
                                                <option value="Stefan_Harary">Stefan Harary</option>
                                                <option value="Michiel_Berende">Michiel Berende</option>
                                                <option value="Jonathan_Rios">Jonathan Rios</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-stepper-step">
                            <h5 class="title mb-3">Secteur d'activité</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-lead">Lead</label>
                                        <div class="form-control-wrap"><select class="form-select js-select2" id="select" name="select" data-placeholder="Select Lead" required>
                                                <option value=""></option>
                                                <option value="Keith_Jensen">Keith Jensen</option>
                                                <option value="Stefan_Zakrisson">Stefan Zakrisson</option>
                                                <option value="Daisy_Morgan">Daisy Morgan</option>
                                                <option value="Stefan_Harary">Stefan Harary</option>
                                                <option value="Michiel_Berende">Michiel Berende</option>
                                                <option value="Jonathan_Rios">Jonathan Rios</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-description">Description</label>
                                        <div class="form-control-wrap"><textarea class="form-control form-control-sm" id="cp1-project-description" name="cp1-project-description" placeholder="Write Project Description" required></textarea></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-stepper-step">
                            <h5 class="title mb-3">Adresse</h5>
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Pays</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="pays" name="pays" required data-msg="Saisir obligatoire"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Ville</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="ville" name="ville" required data-msg="Saisir obligatoire"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Rue</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="rue" name="rue" required data-msg="Saisir obligatoire"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-name">Code poste</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control" id="code_poste" name="code_poste" required data-msg="Saisir obligatoire"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-stepper-step">
                            <h5 class="title mb-3">Choix abonnement</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group"><label class="form-label" for="cp1-project-lead">Abonnement</label>
                                        <div class="form-control-wrap"><select class="form-select js-select2" id="select2" name="select2" data-placeholder="Select Lead" required>
                                                <option value=""></option>
                                                <option value="Keith_Jensen">Keith Jensen</option>
                                                <option value="Stefan_Zakrisson">Stefan Zakrisson</option>
                                                <option value="Daisy_Morgan">Daisy Morgan</option>
                                                <option value="Stefan_Harary">Stefan Harary</option>
                                                <option value="Michiel_Berende">Michiel Berende</option>
                                                <option value="Jonathan_Rios">Jonathan Rios</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="cp1-project-description">Détail abonnement</label>
                                        <div class="form-control" style="height: 200px;" data-simplebar>
                                            <ul id="listeObjectifs">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                        <li class="step-prev">
                            <button class="btn btn-dim btn-danger">
                                <em class="icon ni ni-chevron-left-circle" ></em>
                                <span>Précédent</span>
                            </button>
                        </li>
                        <li class="step-next">
                            <button class="btn btn-primary">
                                <span>Suivant</span>
                                <em class="icon ni ni-chevron-right-circle" ></em>
                            </button>
                        </li>
                        <li class="step-submit">
                            <button class="btn btn-success">
                                <span>Validé</span>
                                <em class="icon ni ni-check-circle-cut" ></em>
                            </button>
                        </li>
                    </ul>
                </div>
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
</div>

@endsection