@extends('main')
@section('content')
<div class="card border-0 shadow">
    <div class="card-header">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right">Nuevo cliente</a>
        <span class="lead">Clientes</span>
    </div>
    <div class="card-body px-0">
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th class="border-0 pl-3">Nombre</th>
                        <th class="border-0">Contacto</th>
                        <th class="border-0">Telefonos</th>
                        <th class="border-0"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td class="pl-3">
                            <a href="{{ route('clientes.show', $client->id) }}">{{ $client->nombre }}</a>
                        </td>
                        <td>{{ $client->contacto }}</td>
                        <td>{{ $client->telefonos }}</td>
                        <td class="text-right pr-3">
                            <a href="{{ route('clientes.edit', $client->id) }}" class="btn btn-warning btn-sm" title="Editar cliente">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection