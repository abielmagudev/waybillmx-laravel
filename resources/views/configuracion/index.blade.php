@extends('main')
@section('content')
<div class="card border-0 shadow">
    <div class="card-header">
        <span class="lead">Configuracion</span>
    </div>
    <form action="" class="card-body">
        <label for="">EMPRESA</label>
        <ul>
            <li>Nombre</li>
            <li>Telefono</li>
            <li>Direccion</li>
            <li>Postal</li>
            <li>Ciudad</li>
            <li>Estado</li>
            <li>Pais</li>
        </ul>

        <hr class="my-4">

        <label for="">FACTURACION</label>
        <div class="form-group">
            <label for="">Tipo de cambio</label>
            <input type="number" step="0.01" class="form-control mb-3" placeholder="$1 dolar americano equivale a pesos mexicanos">
        </div>

        <hr class="my-4">

        <label for="">MONEDA</label>
        <div class="form-group">
            <label for="">Tipo de moneda predeterminada</label>
            <select name="" id="" class="form-control">
                <option value="peso_mexicano">Pesos mexicano</option>
                <option value="dolar_americano">Dolar americano</option>
                <option value="euro">Euro</option>
            </select>
            <small>Al hacer cartaporte asignara moneda predeterminada para costo</small>
        </div>

        <hr class="my-4">

        <label for="">IMPUESTOS</label>
        <div class="form-group">
            <label for="">Regimen fiscal (Persona)</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="regimen_fiscal_fisica" name="regimen_fiscal" value="persona_fisica" checked>
                <label class="form-check-label" for="regimen_fiscal_fisica">Fisica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="regimen_fiscal_moral" name="regimen_fiscal" value="persona_moral">
                <label class="form-check-label" for="regimen_fiscal_moral">Moral</label>
            </div>
        </div>
        <div class="form-group">
            <label for="">IVA</label>
            <input type="number" class="form-control" name="iva" step="0.01" min="0.00">
        </div>
        <div class="form-group">
            <label for="">Retencion IVA</label>
            <input type="number" class="form-control" name="retencion_iva" step="0.01" min="0.01">
            <small class="text-danger">Si el regimen es FISICA, deshabilitar campo de Retencion de IVA</small>
        </div>

        <hr class="my-4">

        <label for="">Formato de fecha, <em>Si es</em>:</label>
        <ul>
            <li>Si es dia/mes/year</li>
            <li>Si es mes/dia/year</li>
            <li>Si es year/mes/dia</li>
        </ul>
    </form>
</div>
@endsection