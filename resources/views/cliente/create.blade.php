@extends('main')
@section('content')
<div class="card border-0 shadow">
    <div class="card-header">
        <div class="lead">Nuevo cliente</div>
    </div>
    <form action="" class="card-body">
        <p class="font-weight-bold lead">Informacion general</p>
        <div class="row">
            <div class="form-group col-sm col-sm-8">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm">
                <label for="">Alias</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm col-sm-12">
                <label for="">RFC</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm col-sm-8">
                <label for="">Direccion</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Colonia</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm-3">
                <label for="">Codigo postal</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm-3">
                <label for="">Ciudad</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm-3">
                <label for="">Estado</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm-3">
                <label for="">Pais</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="">Contacto</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Telefono(s)</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <br class="my-5">
        
        <p class="font-weight-bold lead">Modo de facturacion</p>
        <p class="mb-0">Aplica</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="iva" name="iva" value="1">
            <label class="form-check-label" for="iva">IVA</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="retencion" name="retencion" value="2">
            <label class="form-check-label" for="retencion">Retencion de IVA</label>
        </div>

        <p class="mt-3 mb-0">Monedas</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="moneda_peso_mexicano" name="moneda" value="pesos">
            <label class="form-check-label" for="moneda_peso_mexicano">Peso mexicano</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="moneda_dolar_americano" name="moneda" value="dolares">
            <label class="form-check-label" for="moneda_dolar_americano">Dolar americano</label>
        </div>   

        <p class="text-muted small">Las monedas son para mostrar en un select los tipos que se pueden facturar en una carta-porte</p>

        <p class="text-right">
            <button class="btn btn-success" type="button">Guardar cliente</button>
        </p>
    </form>
</div>
@endsection