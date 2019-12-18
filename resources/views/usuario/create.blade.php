@extends('main')
@section('content')
<h1>Crear usuario</h1>
<div class="card">
    <div class="card-body">
        <form action="">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Sucursal</label>
                <select name="" id="" class="form-control">
                    <option></option>
                    <option>Monterrey</option>
                    <option>Zukurxal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Confirmar password</label>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-success">Guardar usuario</button>
        </form>
    </div>
</div>
@endsection