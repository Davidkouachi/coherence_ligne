<!DOCTYPE html>
<html class="js" lang="fr">
<meta content="text/html;charset=utf-8" http-equiv="content-type">

<head>
    <meta charset="utf-8">
    <meta content="Softnio" name="author">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." name="description">
    <link href="{{asset('images/logo.png')}}" rel="shortcut icon">
    <title>@yield('titre')</title>
    <link href="{{ asset('images/logo.png') }}" rel="shortcut icon">
    <link href="{{ asset('assets/css/dashlite0226.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme0226.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{asset('assets/js/app/chart.js')}}"></script>
    <script src="{{asset('assets/js/app/html2pdf.bundle.min.js')}}"></script>
    </link>
    </link>
    </link>
    </meta>
    </meta>
    </meta>
    </meta>
</head>


<body class="nk-body bg-lighter ">
    <div class="nk-app-root">
        <div class="nk-wrap ">

            @if(!request()->routeIs('index_etat_am','index_etat_risque','index_etat_cause','index_etat_processus','index_etat_actionp','index_etat_actionc') )
            <div class="nk-header is-light nk-header-fixed">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav" href="#">
                                <em class="icon ni ni-menu"></em>
                            </a>
                        </div>
                        <div class="nk-header-brand">
                            <a class="logo-link" href="{{ route('index_accueil') }}">
                                <img alt="logo-dark" class="logo-dark logo-img" src="{{ asset('images/logo.png') }}"
                                    srcset="{{ asset('images/logo.png') }} 2x">
                                </img>
                            </a>
                        </div>
                        <div class="nk-header-menu ms-auto" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a class="logo-link" href="{{ route('index_accueil') }}">
                                        <img alt="logo-dark" class="logo-dark logo-img" src="{{ asset('images/logo.png') }}"
                                            srcset="{{ asset('images/logo.png') }} 2x">
                                        </img>
                                    </a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav" href="#">
                                        <em class="icon ni ni-arrow-left"></em>
                                    </a>
                                </div>
                            </div>
                            @if (Auth::check())
                            <ul class="nk-menu nk-menu-main ui-s2">
                                @if (session('user_auto')->new_user === 'oui' || session('user_auto')->list_user === 'oui' || session('user_auto')->new_poste === 'oui' || session('user_auto')->list_poste === 'oui' || session('user_auto')->historiq === 'oui' || session('user_auto')->stat === 'oui')
                                <li class="nk-menu-item has-sub">
                                    <a class="nk-menu-toggle btn " >
                                        <em class="ni ni-building me-2"></em>
                                        <span class="nk-menu-text text-dark">
                                            Administration
                                        </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        @if (session('user_auto')->new_user === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_user') }}">
                                                <em class="icon ni ni-user-add me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Nouvel utilisateur
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->list_user === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_liste_user') }} ">
                                                <em class="icon ni ni-list me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Liste des utilisateurs
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->new_poste === 'oui')
                                        <li >
                                            <a class="nk-menu-link" data-bs-toggle="modal" data-bs-target="#modalPoste" href="#">
                                                <em class="ni ni-reports-alt me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Nouveau poste
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->list_poste === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_liste_poste') }}" >
                                                <em class="ni ni-list me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Liste des postes
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->stat === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_stat') }}">
                                                <em class="ni ni-bar-chart-alt me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Statistique
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->historiq === 'oui')
                                        <li>
                                            <a class="nk-menu-link" href="{{ route('index_historique') }}">
                                                <em class="icon ni ni-property me-1"></em>
                                                <span class="nk-menu-text " >
                                                    Historique
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        <li>
                                            <a class="nk-menu-link" href="{{ route('index_propos') }}">
                                                <em class="icon ni ni-file me-1"></em>
                                                <span class="nk-menu-text " >
                                                    A propos
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                @if (session('user_auto')->new_proces === 'oui' || session('user_auto')->list_proces === 'oui' || session('user_auto')->eva_proces === 'oui')
                                <li class="nk-menu-item has-sub">
                                    <a class="nk-menu-toggle btn " >
                                        <em class="ni ni-share-alt me-2"></em>
                                        <span class="nk-menu-text text-dark">
                                            Processus
                                        </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        @if (session('user_auto')->new_proces === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_add_processus') }}">
                                                <em class="icon ni ni-property-add me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Nouveau processus
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->list_proces === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_listeprocessus') }}">
                                                <em class="ni ni-list-index me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Liste des processus
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->eva_proces === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_evaluation_processus') }}">
                                                <em class="icon ni ni-view-list-sq me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Tableau d'évaluation
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                @endif
                                @if (session('user_auto')->new_risk === 'oui' || session('user_auto')->list_risk === 'oui' || session('user_auto')->val_risk === 'oui' || session('user_auto')->act_n_val === 'oui' || session('user_auto')->color_para === 'oui' || session('user_auto')->suivi_actp === 'oui' || session('user_auto')->list_actp === 'oui' || session('user_auto')->list_cause === 'oui')
                                <li class="nk-menu-item has-sub">
                                    <a class="nk-menu-toggle btn " >
                                        <em class="ni ni-hot-fill me-2"></em>
                                        <span class="nk-menu-text text-dark">
                                            Risques
                                        </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        @if (session('user_auto')->new_risk === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_risque') }}">
                                                <em class="icon ni ni-property-add me-1"></em>
                                                <span class="nk-menu-text">
                                                    Nouveau risque
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->list_risk === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_liste_risque') }}">
                                                <em class="ni ni-list-index me-1"></em>
                                                <span class="nk-menu-text">
                                                    Liste des risques
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if(session('user_auto')->list_cause === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route("liste_cause") }}">
                                                <em class="icon ni ni-property-add me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Liste des causes
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->val_risk === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_validation_risque') }}">
                                                <em class="icon ni ni-view-list-sq me-1"></em>
                                                <span class="nk-menu-text">
                                                    Tableau de validation
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->act_n_val === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_risque_actionup') }}">
                                                <em class="ni ni-box-view-fill me-1"></em>
                                                <span class="nk-menu-text">
                                                    Risque non validé
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if(session('user_auto')->color_para === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_color_risk') }}">
                                                <em class="ni ni-opt-dot-alt me-1"></em>
                                                <span class="nk-menu-text">
                                                    Paramètrage des couleurs
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->suivi_actp === 'oui' || session('user_auto')->list_actp === 'oui')
                                        <li class="nk-menu-item has-sub">
                                            <a class="nk-menu-link nk-menu-toggle" href="#">
                                                <em class="ni ni-box-view-fill me-1"></em>
                                                <span class="nk-menu-text">
                                                    Action Préventive
                                                </span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                @if (session('user_auto')->suivi_actp === 'oui')
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="{{ route('index_suiviaction') }}">
                                                        <em class="icon ni ni-view-list-sq me-1"></em>
                                                        <span class="nk-menu-text">
                                                            Tableau de suivi
                                                        </span>
                                                    </a>
                                                </li>
                                                @endif
                                                @if (session('user_auto')->list_actp === 'oui')
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="{{ route('index_ap') }}">
                                                        <em class="ni ni-list-index me-1"></em>
                                                        <span class="nk-menu-text">
                                                            Liste des actions
                                                        </span>
                                                    </a>
                                                </li>
                                                @endif
                                            </ul>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                @endif
                                @if (session('user_auto')->fiche_am === 'oui' || session('user_auto')->list_am === 'oui' || session('user_auto')->val_am === 'oui' || session('user_auto')->am_n_val === 'oui' || session('user_auto')->suivi_actc === 'oui' || session('user_auto')->list_actc === 'oui')
                                <li class="nk-menu-item has-sub">
                                    <a class="nk-menu-toggle btn " >
                                        <em class="ni ni-share-alt me-2"></em>
                                        <span class="nk-menu-text text-dark">
                                            Incidents
                                        </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        @if (session('user_auto')->fiche_am === 'oui' )
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_amelioration') }}">
                                                <em class="icon ni ni-property-add me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Fiche de résolution d'incident
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->list_am === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_amelioration_liste') }}" >
                                                <em class="ni ni-list-index me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Suivis des incidents
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->val_am === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_validation_amelioration') }}" >
                                                <em class="ni ni-view-list-sq me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Tableau de validation
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->am_n_val === 'oui')
                                        <li >
                                            <a class="nk-menu-link" href="{{ route('index_amup') }}" >
                                                <em class="ni ni-list me-1"></em>
                                                <span class="nk-menu-text ">
                                                    Fiche(s) non validé(s)
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                        @if (session('user_auto')->suivi_actc === 'oui' || session('user_auto')->list_actc === 'oui')
                                        <li class="nk-menu-item has-sub">
                                            <a class="nk-menu-link nk-menu-toggle" href="#">
                                                <em class="icon ni ni-box-view-fill"></em>
                                                <span class="nk-menu-text">
                                                    Action Corrective
                                                </span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                @if (session('user_auto')->suivi_actc === 'oui' )
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="{{ route('index_suiviactionc') }}">
                                                        <em class="icon ni ni-view-list-sq"></em>
                                                        <span class="nk-menu-text">
                                                            Tableau de suivi
                                                        </span>
                                                    </a>
                                                </li>
                                                @endif
                                                @if (session('user_auto')->list_actc === 'oui')
                                                <li class="nk-menu-item">
                                                    <a class="nk-menu-link" href="{{ route('index_ac') }}">
                                                        <em class="icon ni ni-list-index"></em>
                                                        <span class="nk-menu-text">
                                                            Liste des actions
                                                        </span>
                                                    </a>
                                                </li>
                                                @endif
                                            </ul>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                @endif
                                @yield('menu')
                            </ul>
                            @endif
                        </div>
                        <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    @yield('option_btn')
                                    @if(!request()->routeIs('index_accueil') )
                                    <li class="dropdown chats-dropdown">
                                        <a href="{{ route('index_accueil') }}" class="dropdown-toggle nk-quick-nav-icon">
                                            <div class="icon-status icon-status-na">
                                                <em class="icon ni ni-home"></em>
                                            </div>
                                        </a>
                                    </li>
                                    @endif
                                    @if (Auth::check())
                                    <li class="dropdown user-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">
                                                        {{ session('user_poste')->nom }}
                                                    </div>
                                                    <div class="user-name dropdown-indicator">
                                                        {{ Auth::user()->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>
                                                            <em class="icon ni ni-user-alt"></em>
                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">
                                                            {{ Auth::user()->name }}
                                                        </span>
                                                        <span class="sub-text">
                                                            {{ Auth::user()->email }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('index_profil') }}">
                                                            <em class="icon ni ni-user-alt"></em>
                                                            <span>
                                                                Voir Profil
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}">
                                                            <em class="icon ni ni-signout"></em>
                                                            <span>
                                                                Se déconnecter
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            @endif

            @yield('content')

            @if(!request()->routeIs('index_etat_am','index_etat_risque','index_etat_cause','index_etat_processus','index_etat_actionp','index_etat_actionc') )
            <div class="nk-footer bg-white">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">
                            <span>© <script>document.write(new Date().getFullYear())</script> Cohérence.</span>
                            <span><img height="30" width="35" src="{{ asset('images/logo.png') }}" class="me-5"></span>
                            <span id="anime" class=" badge rounded bg-danger">Version Pro</span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalt" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <h5 class="nk-modal-title text-warning">Traitement en cours</h5>
                        <div class="nk-modal-text">
                            <div class="text-center">
                                <div class="spinner-border text-warning" role="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalAlert2" aria-modal="true" style="position: fixed;" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Session a éxpiré !</h4>
                        <div class="nk-modal-action mt-5">
                            <form class="login-form">
                                <div class="form-group">
                                    <a class="btn btn-lg btn-mw btn-light" id="logoutBtn">
                                        ok
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade zoom" tabindex="-1" id="modalPoste">
        <div class="modal-dialog modal-lg" role="document" style="width: 100%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouveau Poste</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form class="nk-block" id="form" method="post" action="{{ route('index_add_poste_traitement') }}">
                        @csrf
                        <div class="row g-4 mb-4" id="poste-container">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <label class="form-label" for="poste">
                                        Poste(s)
                                    </label>
                                    <div class="form-control-wrap">
                                        <input placeholder="Saisie obligatoire" autocomplete="off" required type="text" class="form-control text-center poste" name="nom[]" oninput="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-lg-6">
                                <div class="form-group text-center">
                                    <a class="btn btn-lg btn-primary btn-dim" id="ajouter-poste">
                                        <em class="ni ni-plus me-2"></em>
                                        <em>Ajouter</em>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-success btn-dim">
                                        <em class="ni ni-check me-2"></em>
                                        <em>Enregistrer</em>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/bundle0226.js')}}"></script>
    <script src="{{asset('assets/js/scripts0226.js')}}"></script>
    <script src="{{asset('assets/js/demo-settings0226.js')}}"></script>
    <script src="{{asset('assets/js/libs/datatable-btns0226.js')}}"></script>
    <script src="{{asset('assets/js/example-toastr0226.js') }}"></script>
    <script src="{{asset('assets/js/example-sweetalert0226.js') }}"></script>

    <script src="{{asset('assets/js/app/poste.js')}}"></script>
    <script src="{{asset('assets/js/app/session.js')}}"></script>
    <script src="{{asset('assets/js/app/load.js')}}"></script>
    <script src="{{asset('assets/js/app/horloge.js')}}"></script>

    @if (session('success'))
        <script>
            NioApp.Toast("<h5>Succès</h5><p>{{ session('success') }}.</p>", "success", {position: "top-right"});
        </script>
        {{ session()->forget('success') }}
    @endif
    @if (session('error'))
        <script>
            NioApp.Toast("<h5>Erreur</h5><p>{{ session('error') }}.</p>", "error", {position: "top-right"});
        </script>
        {{ session()->forget('error') }}
    @endif
    @if (session('warning'))
        <script>
            NioApp.Toast("<h5>Alert</h5><p>{{ session('warning') }}.</p>", "warning", {position: "top-right"});
        </script>
        {{ session()->forget('warning') }}
    @endif
    @if (session('info'))
        <script>
            NioApp.Toast("<h5>Information</h5><p>{{ session('info') }}.</p>", "info", {position: "top-right"});
        </script>
        {{ session()->forget('info') }}
    @endif

</body>

</html>
