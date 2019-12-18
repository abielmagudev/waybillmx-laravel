@extends('main')
@section('content')
<h1>Nueva ruta</h1>

<div class="card border-0 shadow">
    <form action="" class="card-body">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>

        <div class="row no-gutters">
            <div class="col-8">
                <div class="form-group">
                    <label for="">Distancia</label>
                    <input type="number" step="0.01" min="0.01" class="form-control">
                </div>
            </div>
            <div class="col-4 p-0 pl-md-2">
                <div class="form-group">
                    <label for="">Medida de longitud</label>
                    <select name="medida_longitud" id="medida_longitud" class="form-control">
                        <option value="">Kilometros</option>
                        <option value="">Millas</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Guardar ruta</button>
    </form>
</div>
@endsection