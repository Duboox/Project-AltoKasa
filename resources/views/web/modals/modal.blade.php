<!-- Modal -->
<div class="modal fade" id="propiertys-data-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Información Detallada de la Propiedad #{{ $propierty[0]['id'] }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            	<span aria-hidden="true">&times;</span>
            </button>
         </div>
         @foreach($propierty as $data)
	        <div class="modal-body">
	            <div class="row">
	               <div class="col-lg-8">
	                  <strong>Ciudad:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ $data->city->name  }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Área:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ $data->city->areas[0]['name'] }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Tipo de Operación:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ $data->operation->name  }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Tipo de Propiedad:</strong>
	               </div>
	               <div class="col-lg-4">
	                 {{ $data->type->name  }}
	               </div>
	               {{-- <div class="col-lg-8">
	                  <strong>Tipo de Calle:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->street_type) }}
	               </div> --}}
	               <div class="col-lg-8">
	                  <strong>Superficie:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->surface) }}
	               </div>
	               {{-- <div class="col-lg-8">
	                  <strong>Sala:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ if_you_have($data->living_room) }}
	               </div> --}}
	               <div class="col-lg-8">
	                  <strong>Estacionamiento:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->parking) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Número de pisos:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->floors_number) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Baños:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->toilet) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Habitaciones:</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->room) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Puertas:</strong>
	               </div>
	               <div class="col-lg-4">
	                   {{ yesIsNullForWeb($data->door) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Piso</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->floor) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Números</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->number) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Edificio</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->building) }}
	               </div>
	              {{-- <div class="col-lg-8">
	                  <strong>Extra Área</strong>
	               </div>
	               <div class="col-lg-12">
	                  <div class="textarea-style">
	                  	{{ yesIsNullForWeb($data->extra_area) }}
	                  </div>
	               </div>
	               <div class="col-lg-8">
	                  <strong>Llavero</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->key_chain)}}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Aviso Importante</strong>
	               </div>
	               <div class="col-lg-12">
	                  <div class="textarea-style">
	                  	{{ yesIsNullForWeb($data->notice_important) }}
	                  </div>
	               </div>
 	               <div class="col-lg-8">
	                  <strong>Observación</strong>
	               </div>
	               <div class="col-lg-12">
	                  <div class="textarea-style">
	                  	{{ yesIsNullForWeb($data->observation) }}
	                  </div>
	               </div>
	               <div class="col-lg-8">
	                  <strong>Descripción</strong>
	               </div>
	               <div class="col-lg-12">
	                  <div class="textarea-style">
	                  	{{ yesIsNullForWeb($data->description) }}
	                  </div>
	               </div>
	               <div class="col-lg-8">
	                  <strong>Número Cadastral</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->number_cadastral) }}
	               </div>
	              <div class="col-lg-8">
	                  <strong>Folio</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->folio) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Referencia Cadastral</strong>
	               </div>
	               <div class="col-lg-12">
	                  <div class="textarea-style">
	                  	{{ yesIsNullForWeb($data->ref_cadastral) }}
	                  </div>
	               </div>
	               <div class="col-lg-8">
	                  <strong>IVA</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ yesIsNullForWeb($data->iva) }}
	               </div>
	               <div class="col-lg-8">
	                  <strong>Estatus</strong>
	               </div>
	               <div class="col-lg-4">
	                  {{ inStock($data->status) }}
	               </div> --}}
	            </div>
	         </div>
	        @endforeach
         </div>
      </div>
   </div>
</div>