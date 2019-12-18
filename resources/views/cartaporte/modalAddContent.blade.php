<!-- Modal -->
<div class="modal fade" id="modalAddContent" tabindex="-1" role="dialog" aria-labelledby="modalAddContentLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAddContentLabel">Nuevo contenido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#!" id="formAddContent" method="post">
            <div class="form-row">
                <div class="form-group col-sm">
                    <label for="embalaje">Embalaje</label>
                    <select name="embalaje" id="embalaje" class="form-control" required>
                        <option selected disabled></option>
                        <option value="bulto">Bulto</option>
                        <option value="saco">Saco</option>
                        <option value="tarima">Tarima</option>
                        <option value="palet">Palet</option>
                        <option value="lote">Lote</option>
                    </select>
                    <small>Catalogo de embalajes</small>
                </div>
                <div class="form-group col-sm">
                    <label for="cantidad_embalaje">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad_embalaje" id="cantidad_embalaje" step="1" min="1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-sm">
                    <label for="peso">Peso</label>
                    <input type="number" name="peso" id="peso" class="form-control" step="0.0001" min="0.0001" required>
                </div>
                <div class="form-group col-sm">
                    <label for="medida_peso">Medida de peso</label>
                    <select name="medida_peso" id="medida_peso" class="form-control" required>
                        <option selected disabled></option>
                        <option value="toneladas">Toneladas</option>
                        <option value="kilogramos">Kilogramos</option>
                        <option value="libras">Libras</option>
                    </select>
                    <small>Catalogo de medidas</small>
                </div>
                <div class="form-group col-sm">
                    <label for="volumen">Volumen (m3)</label>
                    <input type="number" name="volumen" id="volumen" class="form-control" step="0.0001" min="0.0001" required>
                </div>
            </div>
            <div class="form-group">
                <label for="concepto">Conceptos</label>
                <select name="concepto" id="concepto" class="form-control" required>
                    <option selected disabled></option>
                    <option value="flete">Flete</option>
                    <option value="cruce">Cruce</option>
                    <option value="maniobras">Maniobras</option>
                    <option value="autopistas">Autopistas</option>
                </select>
                <small>Catalogo de conceptos y tarifas</small>
            </div>
            <div class="form-group">
                <label for="importe">Importe</label>
                <input type="number" name="importe" id="importe" class="form-control" step="0.01" min="0.01">
                <small>Costo del concepto</small>
            </div>
            @method('PUT')
            @csrf
        </form>
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" form="formAddContent">Agregar contenido</button>
      </div>
    </div>
  </div>
</div>