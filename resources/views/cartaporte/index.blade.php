@extends('main')
@section('content')
<div class="card border-0 shadow">
    <div class="card-header">
        <a href="{{ route('cartasporte.create') }}" class="btn btn-primary btn-sm float-right">
            Nueva carta porte
        </a>
        <span class="lead">Cartas porte</span>
    </div>
    <div class="card-body px-0">
        <div class="table-responsive">
            <table class="table table-hover table-sm m-0">
                <thead>
                    <tr>
                        <th class="border-0 pl-3">Numero</th>
                        <th class="border-0">Cliente</th>
                        <th class="border-0" colspan="2">Trayecto</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td class="pl-3">
                            <a href="{{ route('cartasporte.show', $i) }}" class="d-none">{{ $i }}</a>
                            <a href="#!" data-toggle="modal" data-target="#modalShowCartaporte" data-info="{{ $i }}">{{ $i }}</a>
                        </td>
                        <td>Cliente X</td>
                        <td>Nuevo Laredo a X</td>
                        <td class="text-right pr-3">
                            <a href="{{ route('cartasporte.edit', $i) }}" class="btn btn-warning btn-sm" title="Editar">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="#printCartaPorte" class="btn btn-primary btn-sm" title="Imprimir">
                                <i class="fas fa-print"></i>
                            </a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('cartaporte.modalShowCartaporte')
@endsection