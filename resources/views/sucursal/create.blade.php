@extends('main')
@section('content')
<h1>Crear sucursal</h1>
<div class="card">
    <div class="card-body">
        <form action="">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alias</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Postal</label>
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
            <button class="btn btn-success">Guardar sucursal</button>
        </form>
    </div>
</div>
@endsection