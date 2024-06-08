@extends('app_panel')

@section('titre', 'Panel')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Tableau de bord</h3>
                        </div>
                        {{-- <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <a href="{{ route('index_add_entr') }}" class="btn btn-primary">
                                                <em class="icon ni ni-plus"></em>
                                                <span>Entreprise</span>
                                            </a>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a href="#" class="btn btn-danger">
                                                <em class="icon ni ni-plus"></em>
                                                <span>Formule</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">

                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Entreprises</div>
                                                <div class="count">17</div>
                                            </div><em class="icon bg-primary-dim ni ni-building"></em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Utilisateurs</div>
                                                <div class="count">19</div>
                                            </div><em class="icon bg-success-dim ni ni-users"></em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Formules</div>
                                                <div class="count">2</div>
                                            </div><em class="icon bg-danger-dim ni ni-clipboard"></em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Administrateurs</div>
                                                <div class="count">2</div>
                                            </div>
                                            <em class="icon bg-warning-dim ni ni-link-group"></em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Administrateurs</div>
                                                <div class="count">2</div>
                                            </div>
                                            <em class="icon bg-warning-dim ni ni-link-group"></em>
                                        </li>
                                    </ul>
                                    <div class="analytic-ov">
                                        <div class="analytic-data-group analytic-ov-group g-3">
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Users</div>
                                                <div class="fw-bold">2.57K</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Sessions</div>
                                                <div class="fw-bold">3.98K</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Users</div>
                                                <div class="fw-bold">28.49%</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Users</div>
                                                <div class="fw-bold">7m 28s</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Administrateurs</div>
                                                <div class="count">2</div>
                                            </div>
                                            <em class="icon bg-warning-dim ni ni-link-group"></em>
                                        </li>
                                    </ul>
                                    <div class="analytic-ov">
                                        <div class="analytic-data-group analytic-ov-group g-3">
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Users</div>
                                                <div class="fw-bold">2.57K</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Sessions</div>
                                                <div class="fw-bold">3.98K</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Users</div>
                                                <div class="fw-bold">28.49%</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title">Users</div>
                                                <div class="fw-bold">7m 28s</div>
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
    </div>
</div>

@endsection