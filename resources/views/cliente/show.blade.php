@extends('main')
@section('content')
<div class="row">
    <div class="col-sm-3">
        <div class="card border-0 shadow">
            <div class="card-header">
                <a href="{{ route('clientes.edit', $client->id) }}" class="btn btn-warning btn-sm align-middle float-right" data-toggle="tooltip" data-placement="left" title="Editar cliente">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <span class="align-middle lead">Informacion</span>
            </div>
            <div class="card-body">
                <p>
                    <span class="d-block small text-weigth-bold text-muted"><small>NOMBRE</small></span>
                    <span>{{ $client->nombre }}</span>
                </p>
                <p>
                    <span class="d-block small text-muted">Direccion</span>
                    <span>{{ $client->direccion }}</span>
                </p>
                <p>
                    <span class="d-block small text-muted">Colonia</span>
                    <span>{{ $client->colonia }}</span>
                </p>
                <p>
                    <span class="d-block small text-muted">Postal</span>
                    <span>{{ $client->postal }}</span>
                </p>
                <p>
                    <span class="d-block small text-muted">Ciudad</span>
                    <span>{{ $client->ciudad }}</span>
                </p>
                <p>
                    <span class="d-block small text-muted">Estado</span>
                    <span>{{ $client->estado }}</span>
                </p>
                <p>
                    <span class="d-block small text-muted">Pais</span>
                    <span>{{ $client->pais }}</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card border-0 shadow">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold active" id="trayectos-tab" data-toggle="tab" href="#trayectos" role="tab" aria-controls="trayectos" aria-selected="true">Trayectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" id="convenios-tab" data-toggle="tab" href="#convenios" role="tab" aria-controls="convenios" aria-selected="false">Convenios</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="trayectos" role="tabpanel" aria-labelledby="trayectos-tab">
                    <div class="card-body">
                        <a href="{{ route('trayectos.create', $client->id) }}" class="float-right btn btn-primary btn-sm">Nuevo trayecto</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th class="border-0 pl-3">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td class="pl-3">Trayecto {{ $i }}</td>
                                </tr>
                                @endfor
                              </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="convenios" role="tabpanel" aria-labelledby="convenios-tab">
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th class="border-0 pl-3">Nombre</th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pl-3">Nuevo Laredo a Monterrey</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">Puebla a Chiapas</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection