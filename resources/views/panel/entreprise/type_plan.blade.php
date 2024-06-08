@extends('app_panel')

@section('titre', 'Type de plan')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Type de plan d'abonnement</h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-12-12" >
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="" >
<form class="form-validate" action="{{route('add_type_plan')}}" method="post">
    @csrf
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label" for="full-name-1">Nom complet du type plan</label>
                <div class="form-control-wrap">
                    <input required type="text" name="type_plan" class="form-control" data-msg="Saisir Obligatoire" oninput="this.value = this.value.toUpperCase()">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group text-center">
                <button type="reset" class="btn btn-dim btn-lg btn-danger">
                    <span>Rèmise à zéro</span>
                    <em class="icon ni ni-cross-circle" ></em>
                </button>
                <button type="submit" class="btn btn-dim btn-lg btn-success">
                    <span>Terminé</span>
                    <em class="icon ni ni-check-circle-cut" ></em>
                </button>
            </div>
        </div>
    </div>
</form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12-12">
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Type de plan d'abonnement</th>
                                                <th>Date de création</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list as $key => $value)
                                            <tr>
                                                <td>{{ $key+1}}</td>
                                                <td>{{ $value->nom }}</td>
                                                <td>{{ \Carbon\Carbon::parse($value->created_at)->translatedFormat('j F Y '.' à '.' H:i:s') }}</td>
                                                <td>
                                    <ul>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
                                                    <em class="icon ni ni-more-h"></em>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalModi{{ $value->id }}">
                                                                <em class="icon ni ni-edit"></em>
                                                                <span>Mise à jour</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($list as $value)
    <div class="modal fade zoom" tabindex="-1" id="modalModi{{ $value->id }}">
        <div class="modal-dialog modal-lg" role="document" style="width: 100%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mise à jour </h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form class="form-validate" method="post" action="{{ route('update_type_plan') }}">
                        @csrf
                        <div class="row g-4 mb-4">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <label class="form-label" for="poste">
                                        Type de plan
                                    </label>
                                    <div class="form-control-wrap">
                                        <input required name="type_plan_update" type="text" class="form-control" data-msg="Saisir Obligatoire" oninput="this.value = this.value.toUpperCase()" value="{{ $value->nom }}">
                                        <input type="text" name="type_plan_id" value="{{ $value->id }}" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-dim btn-lg btn-primary">
                                        <span>Terminé</span>
                                        <em class="icon ni ni-check-circle-cut"></em>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection