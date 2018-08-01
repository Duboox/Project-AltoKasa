<!-- Modal -->
<div class="modal fade" id="search_owner_modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content size-75">
         <div class="modal-header">
            <h3 class="modal-title">Propietario</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            	<span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-12">
                  <label>Buscar Dueño de Propiedad</label>
                    <div class="form-group">
                     <select name="query_owner" id="query_owner" class="form-control chosen-select">
                        <option value="" id="option">Selecciona Propietario</option>
                        @foreach($data[3] as $owner)
                           <option value="{{ $owner->id }}">{{ fullname($owner->first_name, $owner->last_name) }}</option>
                        @endforeach
                     </select>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>