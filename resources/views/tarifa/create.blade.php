@extends('main')
@section('content')
<h1>Nueva tarifa</h1>
<div class="card border-0 shadow">
    <form action="" class="card-body">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>

        <label for="">Importe</label>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="">En Pesos</label>
                    <input type="number" step="0.01" min="0.01" class="form-control">
                </div>    
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="">En Dolares</label>
                    <input type="number" step="0.01" min="0.01" class="form-control">
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-success">Guardar tarifa</button>
    </form>
</div>
@endsection