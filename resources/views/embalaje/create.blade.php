@extends('main')
@section('content')
<h1>Nuevo embalaje</h1>
<br>
<div class="card border-0 shadow">
    <form class="card-body">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <button type="button" class="btn btn-success">Guardar embalaje</button>
    </form> 
</div>
@endsection