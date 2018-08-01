<!-- Modal -->
<div class="modal fade" id="add_owner_modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Registro Propietario - Requeridos (*)</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            	<span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <form id="owner_register">
               <div class="col-lg-12">
                  <div class="">
                    <label>Nombre (*)</label>
                    <div class="form-group">
                       <input name="first_name" id="first_name" type="text" class="form-control">
                    </div>
                  </div>
                    <div class="">
                       <label>Apellido (*)</label>
                       <div class="form-group">
                          <input name="last_name" id="last_name" type="text" class="form-control">
                       </div>
                    </div>
                    <div class="">
                       <label>Teléfono (*)</label>
                       <div class="form-group">
                          <input name="phone" id="phone" type="number" class="form-control">
                       </div>
                    </div>
                    <div class="">
                       <label>Móvil</label>
                       <div class="form-group">
                          <input name="cell_phone" id="cell_phone" type="number" class="form-control">
                       </div>
                    </div>
                    <div class="">
                       <label>Tel: Trabajo</label>
                       <div class="form-group">
                          <input name="work_phone" id="work_phone" type="number" class="form-control">
                       </div>
                    </div>
                     <div class="">
                       <label>Dirección</label>
                       <div class="form-group">
                          <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                       </div>
                    </div>
                    <div class="">
                       <button type="submit" id="save_owner" class="btn btn-primary button-owner">Guardar</button>
                    </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>