@extends('main')
@section('content')
<div class="card border-0 shadow">
    <div class="card-header">
        <span class="lead">Editar carta porte {{ $id }}</span>
    </div>
    <form action="{{ route('cartasporte.store') }}" class="card-body" method="post">
        <p class="text-right">
            <span>{{ $current_date }}</span>
            <span class="text-info font-weight-bold">@</span>
        </p>

        <div class="form-group">
            <label for="">Serie: </label>
            <span>EPx[0-9]</span>
            <span class="text-info font-weight-bold">@</span>
            <ul>
                <li>CPx: Prefijo para identificar las diferentes sucursales de la empresa</li>
                <li>[0-9]: Numero consecutivo o autoincremental segun su registro</li>
                <li>Campo de bodegas o sucursales de la empresa?</li>
                <li>Mostrar posible serie o mostrar la serie generada despues de guardar?</li>
            </ul>
        </div>

        <hr class="my-5">

        <div class="form-row">
            <div class="form-group col-sm">
                <label for="cliente">Cliente</label>
                <select name="cliente" id="cliente" class="form-control">
                    <option selected disabled></option>
                    <option value="">Cliente 1 (alias)</option>
                    <option value="">Cliente 2 (alias)</option>
                    <option value="">Cliente 3 (alias)</option>
                </select>
                <small>Extrae informacion del cliente seleccionado</small>
            </div>

            <div class="form-group col-sm">
                <label for="convenio">Convenios</label>
                <select name="convenio" id="convenio" class="form-control">
                    <option selected disabled></option>
                    <option value="">Convenio 1</option>
                    <option value="">Convenio 2</option>
                    <option value="">Convenio 3</option>
                </select>
            </div>
        </div>

        <ul>
            <li>RFC</li>
            <li>Direccion</li>
            <li>Colonia</li>
            <li>Codigo postal</li>
            <li>Ciudad</li>
            <li>Estado</li>
        </ul>

        <hr class="my-5">

        <p class="font-weight-bold">Tarifa de ruta</p>
        <div class="form-group">
            <label for="ruta">Ruta</label>
            <select name="ruta" id="ruta" class="form-control">
                <option value="">Nuevo Laredo - Monterrey</option>
                <option value="">Nuevo Laredo - Victoria</option>
                <option value="">Monclova - Reynosa</option>
            </select>
            <small>Costo del trayecto (origen a destino) por kilometros</small>
        </div>

        <p class="font-weight-bold">
            <span>Trayectoria</span>
        </p>
        <div class="row">
            <div class="col-sm">
                <p class="">
                    <em>Origen</em>
                </p>
                <div class="form-group">
                    <label for="">Remitente</label>
                    <input type="text" name="remitente[nombre]" class="form-control" placeholder="Nombre de la persona o empresa quien lo envia">
                </div>
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" name="remitente[direccion]" class="form-control" placeholder="Direccion del origen">
                </div>
                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" name="remitente[colonia]" class="form-control" placeholder="Colonia del origen">
                </div>
                <div class="form-group">
                    <label for="">Codigo postal</label>
                    <input type="text" name="remitente[postal]" class="form-control" placeholder="Codigo postal del origen">
                </div>
                <div class="form-group">
                    <label for="">Ciudad</label>
                    <input type="text" name="remitente[ciudad]" class="form-control" placeholder="Ciudad del origen">
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" name="remitente[estado]" class="form-control" placeholder="Estado del origen">
                </div>
                <div class="form-group">
                    <label for="">Pais</label>
                    <input type="text" name="remitente[pais]" class="form-control" placeholder="Pais del origen">
                </div>
                <p>
                    <small class="d-block text-muted">Bodegas y sucursales de la empresa</small>
                </p>
            </div>

            <div class="col-sm">
                <p class="">
                    <em>Destino</em>
                </p>
                <div class="form-group">
                    <label for="">Destinatario</label>
                    <input type="text" name="destinatario[nombre]" class="form-control" placeholder="Nombre de la persona o empresa quien recibe">
                </div>
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" name="destinatario[direccion]" class="form-control" placeholder="Direccion del destinatario">
                </div>
                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" name="destinatario[colonia]" class="form-control" placeholder="Colonia del destinatario">
                </div>
                <div class="form-group">
                    <label for="">Codigo postal</label>
                    <input type="text" name="destinatario[postal]" class="form-control" placeholder="Codigo postal del destinatario">
                </div>
                <div class="form-group">
                    <label for="">Ciudad</label>
                    <input type="text" name="destinatario[ciudad]" class="form-control" placeholder="Ciudad del destinatario">
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" name="destinatario[estado]" class="form-control" placeholder="Estado del destinatario">
                </div>
                <div class="form-group">
                    <label for="">Pais</label>
                    <input type="text" name="destinatario[pais]" class="form-control" placeholder="Pais del destinatario">
                </div>
                <div class="form-group">
                    <label for="">RFC</label>
                    <input type="text" name="destinatario[rfc]" class="form-control" placeholder="RFC de la persona o empresa quien recibe">
                </div>
            </div>
        </div>


        <hr class="my-5">

        <p class="font-weight-bold">
            <span class="float-right" data-toggle="tooltip" data-placement="top" title="Agregar">
                <a href="#addContentModal" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddContent">
                    <i class="fas fa-plus"></i>
                </a>
            </span>
            <span>Contenido</span>
        </p>
        <div class="table-responsive">
            <table class="table table-sm table-hover xtable-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Cantidad</th>
                        <th>Embalaje</th>
                        <th>Descripcion</th>
                        <th>Peso</th>
                        <th>Medida de peso</th>
                        <th>Volumen (m3)</th>
                        <th>Concepto</th>
                        <th>Importe <small class="">(Costo por concepto)</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="#modal_edit" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="#js_remove" class="btn btn-danger btn-sm">
                                <i class="fas fa-minus"></i>
                            </a>
                        </td>
                        <td>2</td>
                        <td>Palet</td>
                        <td>Bloques de piedra</td>
                        <td>800</td>
                        <td>Kilogramos</td>
                        <td>45</td>
                        <td>Flete</td>
                        <td>145.20</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#modal_edit" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="#js_remove" class="btn btn-danger btn-sm">
                                <i class="fas fa-minus"></i>
                            </a>
                        </td>
                        <td>4</td>
                        <td>Bulto</td>
                        <td>Pliegos de madera roja</td>
                        <td>256</td>
                        <td>Libras</td>
                        <td>20</td>
                        <td>Cruce</td>
                        <td>90.20</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr class="my-5">

        <p class="font-weight-bold">Asignacion</p>
        <div class="row">
            <div class="form-group col-sm">
                <label for="operador">Operador</label>
                <select name="operador" id="operador" class="form-control">
                    <option selected disabled></option>
                    <option value="">Operador 1</option>
                    <option value="">Operador 2</option>
                    <option value="">Operador 3</option>
                </select>
                <small>Catalogo de operadores</small>
            </div>
            <div class="form-group col-sm">
                <label for="" class="d-block mb-3">Remolque</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="remolque_propio" name="remolque" value="propio" checked>
                    <label class="form-check-label" for="remolque_propio">Propio</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="remolque_externo" name="remolque" value="externo">
                    <label class="form-check-label" for="remolque_externo">Externo</label>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-sm">
                <label for="tractor">Tractor</label>
                <select name="tractor" id="tractor" class="form-control">
                    <option selected disabled></option>
                    <option value="">Tractor 1</option>
                    <option value="">Tractor 2</option>
                    <option value="">Tractor 3</option>
                </select>
                <small>Catalogo de tractores</small>
            </div>
            <div class="form-group col-sm">
                <label for="tractor">Numero de remolque</label>
                <input list="remolques" name="remolque_id" class="form-control">
                <datalist id="remolques">
                    <option value="1" label="R1326">
                    <option value="2" label="R8095">
                    <option value="3" label="R3245">
                </datalist>
                <small class="d-block text-muted">Catalogo de remolques</small>
            </div>
        </div>

        <hr class="my-5">

        <div class="form-group">
            <label for="">Numero de liquidacion</label>
            <input type="text" class="form-control" >
        </div>

        <hr class="my-5">

        <p class="font-weight-bold">Informacion para facturar</p>
        <div class="form-row">
            <div class="form-group col-sm col-sm-2">
                <label for="">Suma de importes</label>
                <input type="number" class="form-control" step="0.01" min="0.01" value="100">
                <p><small>Suma de los costos de conceptos</small></p>
            </div>
            <div class="form-group col-sm col-sm-2">
                <label for="">IVA (8% | 16%)</label>
                <input type="number" class="form-control" step="0.01" min="0.01" value="16">
                <p><small>Suma de importes * tasa del IVA 8%(0.08) o 16%(0.16)</small></p>
                <p>* Tasa de IVA(Settings)</p>
            </div>
            <div class="form-group col-sm col-sm-2">
                <label for="">RETENCION IVA (4%)</label>
                <input type="number" class="form-control" step="0.01" min="0.01" value="4">
                <p><small>Suma de importes * tasa de retencion IVA 4%(0.04)</small></p>
                <p>* Tasa de  RETENCION IVA (Settings)</p>
            </div>
            <div class="form-group col-sm col-sm-2">
                <label for="">TOTAL</label>
                <input type="number" class="form-control" step="0.01" min="0.01" value="112">
                <p>Suma de importes + IVA - Retencion  = Total</p>
            </div>
            <div class="form-group col-sm col-sm-4">
                <label for="">MONEDA (Si no hay convenio)</label>
                <select name="" id="" class="form-control">
                    <option value="">Pesos (Moneda mexicana)</option>
                    <option value="">Dollares (Moneda americana)</option>
                </select>
            </div>
        </div>
        
        <p class="text-right">
            <button class="btn btn-warning" type="button">Actualizar carta porte</button>
        </p>
    </form>
</div>
@include('cartaporte.modalAddContent')
@endsection