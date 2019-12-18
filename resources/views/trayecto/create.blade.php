@extends('main')
@section('content')
<div class="card border-0 shadow">
    <div class="card-header">
        <a href="{{ route('clientes.show', $client_id) }}" class="btn btn-primary btn-sm float-right">Regresar</a>
        <span class="lead">Nuevo trayecto</span> | <small> Cliente {{ $client_id }}</small>
    </div>
    <form action="" class="card-body">
        <div class="row">
            <div class="col-sm">
                <p class="font-weight-bold lead">Origen</p>
                <div class="form-group">
                    <label for="">Remitente</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Codigo postal</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="col-sm">
                <p class="font-weight-bold lead">Destino</p>
                <div class="form-group">
                    <label for="">Destinatario</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Codigo postal</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">RFC</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </form>
    
    <div class="card-footer text-right">
        <button class="btn btn-success" type="button">Agregar trayecto</button>
    </div>
</div>
@endsection