<!-- Modal -->
<div class="modal fade" id="modalformtallas" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerregister"> 
        <h5 class="modal-title" id="titlemodal">Nueva Talla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
              <form autocomplete="off" class="form-horizontal" id="formtallas" name="formtallas" enctype="multipart/form-data" >
              <input id="idtalla" name="idtalla" type="hidden" value="">
                <p class="text-primary">Todos los campos son obligatorios.</p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="control-label">Nombre</label>
                    <input class="form-control" id="txtnombre" name="txtnombre" type="text" minlength="2" maxlength="20" pattern="[a-zA-Z ]{2,20}" placeholder="Nombre del producto" required="">
                  </div>                  
                </div>

                
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="control-label">Precio</label>
                      <input type="number" class="form-control" id="txtprecio" name="txtprecio" minlength="2" maxlength="20" pattern="[a-zA-Z ]{2,20}" placeholder="Precio">
                    </div>

                    <div class="form-group col-md-6">
                      <label class="control-label">Cantidad</label>
                      <input type="number" class="form-control" id="txtcantidad" name="txtcantidad" minlength="2" maxlength="20" pattern="[a-zA-Z ]{2,20}" placeholder="Cantidad">
                    </div>
                </div>

             
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="exampleSelect1">Estado</label>
                      <select class="form-control" id="liststatus" name="liststatus" placeholder="Estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                        
                      </select>
                  </div>
             

                <div class="tile-footer">
                    <button id="btnactionform" class="btn btn-primary" type="submit">
                      <i class="fa fa-fw fa-lg fa-check-circle"></i>
                      <span id="btntext">Guardar</span>
                    </button>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="#" data-dismiss="modal">
                    <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
              </form>
            
      </div>
      
    </div>
  </div>
</div>