<h1 class="font-bold">Propiedad</h1>
<hr>
<fieldset>
   <div class="row">
   <div class="col-lg-12">
      <div class="ibox-2 float-e-margins">
         <div class="ibox-title">
            <h5>Requeridos (*)</h5>
            <div class="ibox-tools">
               <button type="submit" class="btn btn-primary btn-xs" id="save-propierty">Guardar Propiedad</button>
            </div>
         </div>
      </div>
   </div>
   </div>
</fieldset>
<fieldset>
   <div class="row">
      <div class="col-lg-6">
         <div class="form-group">
            <label>Categoria de la Propiedad (*)</label>
            <select class="form-control" name="id_category">
               <option value="">Selecciona</option>
               <option value="1">VENTA</option>
               <option value="2">ALQUILER</option>
               <option value="3">ANTICRETICO</option>
            </select>
            @if ($errors->has('id_category'))
               <span class="error-validate">
                  <strong>{{ $errors->first('id_category') }}</strong>
               </span>
           @endif
         </div>
      </div>
      <div class="col-lg-6">
         <div class="form-group">
            <label>Titulo de la Propiedad (*)</label>
            <input name="property_title" type="text" class="form-control">
            @if ($errors->has('property_title'))
               <span class="error-validate">
                  <strong>{{ $errors->first('property_title') }}</strong>
               </span>
           @endif
         </div>
      </div>
      <div class="col-lg-6">
         <div class="form-group">
            <label>Descripción de La Propiedad (*)</label>
            <textarea name="property_description" class="form-control" rows="5" value="Sin Descripción"></textarea>
            @if ($errors->has('property_description'))
               <span class="error-validate">
                  <strong>{{ $errors->first('property_description') }}</strong>
               </span>
           @endif
         </div>
      </div>
   </div>
</fieldset>
<h1 class="font-bold">Caracteristicas</h1>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-3">
         <div class="form-group">
            <label>Tipo de Operación (*)</label>
            <select class="form-control" name="id_type_operation">
               <option value="">Selecciona</option>
               @foreach($data[1] as $type_operation)
               <option value="{{ $type_operation->id }}">{{ $type_operation->name }}</option>
               @endforeach
            </select>
            @if ($errors->has('id_type_operation'))
               <span class="error-validate">
                  <strong>{{ $errors->first('id_type_operation') }}</strong>
               </span>
           @endif
         </div>
         <div class="form-group">
            <label>Zona Auxiliar</label>
            <input name="auxiliary_zone" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label>Planta</label>
            <input name="plant" type="number" class="form-control">
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Tipo de Propiedad (*)</label>
            <select class="form-control" name="id_type_property">
               <option value="">Selecciona</option>
               @foreach($data[2] as $type_property)
               <option value="{{ $type_property->id }}">{{ $type_property->name }}</option>
               @endforeach
            </select>
            @if ($errors->has('id_type_property'))
               <span class="error-validate">
                  <strong>{{ $errors->first('id_type_property') }}</strong>
               </span>
           @endif
         </div>
         <div class="form-group">
            <label>Tipo de Calle</label>
            <select class="form-control" name="type_street">
               <option value="">Selecciona</option>
               <option value="0">Calle</option>
               <option value="1">Avenida</option>
               <option value="2">Callejón</option>
               <option value="3">Pasaje</option>
               <option value="4">Urbanización</option>
               <option value="5">Condominio</option>
            </select>
         </div>
         <div class="form-group">
            <label>Puerta</label>
            <input name="door" type="text" class="form-control">
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Ciudad (*)</label>
            <input id="searchTextField" name="city_name" class="form-control" type="text" size="50" placeholder="Introduce una ciudad" autocomplete="on">
            <!-- <select class="form-control" name="id_city" id="city">
               <option value="">Selecciona</option>
               @foreach($data[0] as $city)
               <option value="{{ $city->id }}">{{ $city->name }}</option>
               @endforeach
            </select> -->
            @if ($errors->has('city_name'))
               <span class="error-validate">
                  <strong>{{ $errors->first('city_name') }}</strong>
               </span>
           @endif
         </div>
         <div class="form-group">
            <label>Dirección de la Propiedad (*)</label>
            <textarea name="property_address" class="form-control" rows="5"></textarea>
            @if ($errors->has('property_address'))
               <span class="error-validate">
                  <strong>{{ $errors->first('property_address') }}</strong>
               </span>
           @endif
         </div>
      </div>
      <div class="col-lg-3">
         <!-- <div class="form-group">
            <label>Área</label>
            <select class="form-control" name="id_area" id="area">
               <option value="">Selecciona</option>
               @foreach($data[0] as $areas)
               <option value="" id="option">Área</option>
               @endforeach
            </select>
            @if ($errors->has('id_area'))
               <span class="error-validate">
                  <strong>{{ $errors->first('id_area') }}</strong>
               </span>
           @endif
         </div> -->
         <div class="form-group">
            <label>Número</label>
            <input name="number" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Edificio</label>
            <input name="building" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label>Anticrético</label>
            <br>
            <label class="pointer">
            <input type="radio" name="anticretico" value="1"> Si Posee
            </label>
            <label class="pointer">
            <input type="radio" name="anticretico" value="0"> No Posee
            </label>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<h1 class="font-bold">Distribución - Otros Datos</h1>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-4">
         <div class="form-group">
            <label>N° Habitaciones Simple</label>
            <input name="n_simple_rooms" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>N° de Salones</label>
            <input name="n_rooms" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Años de Construcción</label>
            <input name="years_construction" type="number" class="form-control">
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>N° Baños</label>
            <input name="n_bathrooms" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>N° Parking</label>
            <input name="n_parking" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Comunidad</label>
            <input name="community" type="text" class="form-control">
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>N° Aseos</label>
            <input name="n_toilets" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>N° Plantas</label>
            <input name="n_plants" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Suite</label>
            <br>
            <label class="pointer">
            <input type="radio" name="suite" value="1"> Si posee
            </label>
            <label class="pointer">
            <input type="radio" name="suite" value="0"> No posee
            </label>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<h1 class="font-bold">Calidades</h1>
<fieldset>
   <div class="row">
      @foreach($data[5][0] as $tag)
      <div class="col-lg-2">
         <label class="capitalize">
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
            <div class="tag-name">{{ $tag->name }}</div>
         </label>
      </div>
      @endforeach
   </div>
</fieldset>
<hr>
<h1 class="font-bold">Datos Internos</h1>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-8">
         <h3 class="c0606e0">* Datos Inmobiliarios</h3>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Llavero</label>
               <br>
               <label class="pointer">
               <input type="radio" name="key_chain" value="1"> Si posee
               </label>
               <label class="pointer">
               <input type="radio" name="key_chain" value="0"> No posee
               </label>
            </div>
            <div class="form-group">
               <label>Prioridad</label>
               <input name="priority" type="text" class="form-control">
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Creado por: </label>
                  <select name="created_by" class="form-control">
                     <option value="">Seleccione</option>
                     @foreach($data[6] as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                     @endforeach
                  </select>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Contacto por: </label>
                  <select name="created_by" class="form-control">
                     <option value="">Seleccione</option>
                     @foreach($data[6] as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                     @endforeach
                  </select>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Aviso Importante</label>
            <textarea name="important_announcement" class="form-control" rows="5"></textarea>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-8">
         <h3 class="c0606e0">* Datos Catastrales</h3>
         <div class="col-lg-3">
            <div class="form-group">
               <label>Número</label>
               <input name="c_number" type="number" class="form-control">
            </div>
            <div class="form-group">
               <label>Ref Catastral</label>
               <input name="c_ref" type="text" class="form-control">
            </div>
         </div>
         <div class="col-lg-5">
            <div class="form-group">
               <label>Folio</label>
               <input name="folio" type="text" class="form-control">
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Registro de: </label>
               <input name="register_of" type="text" class="form-control">
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Observación de Propiedad</label>
            <textarea name="property_observation" class="form-control" rows="5"></textarea>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
      <h3 class="c0606e0">* Datos de Venta</h3>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Precio Inmobiliaria</label>
            <input name="real_estate_price" id="real_estate_price" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label>Precio Propietario</label>
            <input name="owner_price" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Avaluos</label>
            <input name="avaluo" type="number" class="form-control">
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Valor Comisión</label>
            <select name="commission_value" id="commission_value" class="form-control">
               <option value="">Seleccione</option>
               <option value="2">2%</option>
                <option value="2.5">2,5%</option>
                <option value="3">3%</option>
                <option value="3.5">3,5%</option>
                <option value="4">4%</option>
                <option value="4.5">4,5%</option>
                <option value="5">5%</option>
            </select>
         </div>
         <div class="form-group">
            <label>Calculo</label>
            <input name="calculation" id="calculation" type="text" class="form-control" readonly>
         </div>
         <div class="form-group">
            <label>Modo abierto</label>
            <br>
            <label class="pointer">
            <input type="radio" id="open_mode_radio_1" name="open_mode_radio_1" value="1" onClick="checkOpenMode()"> Si
            </label>
            <label class="pointer">
            <input type="radio" id="open_mode_radio_0" name="open_mode_radio_1" value="0" onClick="checkOpenMode()"> No
            </label>
         </div>
         <div class="form-group">
            <label>Precio modo abierto</label>
            <input name="price_open_mode" id="price_open_mode" type="text" class="form-control" disabled>
         </div>
      </div>
      <h3>En Exclusiva</h3>
      <div class="col-lg-3 dedede">
         <div class="form-group">
            <label>Desde</label>
            <input name="in_exclusive_from" type="date" class="form-control">
         </div>
      </div>
      <div class="col-lg-3 dedede">
         <div class="form-group">
            <label>Hasta</label>
            <input name="in_exclusive_to" type="date" class="form-control">
         </div>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
      <h3 class="c0606e0">* Datos de Alquiler</h3>
      <div class="col-lg-2">
         <div class="form-group">
            <label>Precio</label>
            <input name="rental_price" type="number" class="form-control">
         </div>
      </div>
      <div class="col-lg-2">
         <label>Mes</label>
         <select name="rental_month" class="form-control">
            <option value="">Seleccione</option>
             <option value="1">Enero</option>
             <option value="2">Febrero</option>
             <option value="3">Marzo</option>
             <option value="4">Abril</option>
             <option value="5">Mayo</option>
             <option value="6">Junio</option>
             <option value="7">Julio</option>
             <option value="8">Agosto</option>
             <option value="9">Septiembre</option>
             <option value="10">Octubre</option>
             <option value="11">Noviembre</option>
             <option value="12">Diciembre</option>
         </select>
      </div>
      <div class="col-lg-2">
         <label>Honorarios</label>
         <select name="honorarium" class="form-control">
            <option value=""></option>
         </select>
      </div>
      <div class="col-lg-2">
         <div class="form-group">
            <label>Mantenimiento Incluida</label>
            <br>
            <label class="pointer">
            <input type="radio" name="m_included" value="1"> Si posee
            </label>
            <label>
            <input type="radio" name="m_included" value="0"> No posee
            </label>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="form-group">
            <label>Opción a Comprar</label>
            <br>
            <label class="pointer">
            <input type="radio" name="option_to_buy" value="1"> Si posee
            </label>
            <label>
            <input type="radio" name="option_to_buy" value="0"> No posee
            </label>
         </div>
      </div>
      <div class="col-lg-2">
         <div class="form-group">
            <label>Calefacción Incluida</label>
            <br>
            <label class="pointer">
            <input type="radio" name="heating_included" value="1"> Si posee
            </label>
            <label class="pointer">
            <input type="radio" name="heating_included" value="0"> No posee
            </label>
         </div>
      </div>
   </div>
</fieldset>
<fieldset>
   <div class="row">
      <h3 class="c0606e0">* Preferencias del arrendador</h3>
      <div class="col-lg-3">
         <label>Periodo Mínimo</label>
         <div class="form-group">
            <input name="minimum_period" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Admite Extranjeros</label>
            <br>
            <label class="pointer">
            <input type="radio" name="admits_foreigners" value="1"> Si
            </label>
            <label class="pointer">
            <input type="radio" name="admits_foreigners" value="0"> No
            </label>
         </div>
      </div>
      <div class="col-lg-3">
         <label>Max Inquilinos</label>
         <div class="form-group">
            <input name="max_tenants" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Admite Animales</label>
            <br>
            <label class="pointer">
            <input type="radio" name="pets_allowed" value="1"> Si
            </label>
            <label class="pointer">
            <input type="radio" name="pets_allowed" value="0"> No
            </label>
         </div>
      </div>
      <div class="col-lg-3">
         <label>Periodo Máximo</label>
         <div class="form-group">
            <input name="maximum_period" type="number" class="form-control">
         </div>
         <div class="form-group">
            <label>Estudiantes</label>
            <br>
            <label class="pointer">
            <input type="radio" name="students" value="1"> Si aceptamos
            </label>
            <label class="pointer">
            <input type="radio" name="students" value="0"> No aceptamos
            </label>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Preferencias</label>
            <textarea name="preferences" class="form-control" rows="5"></textarea>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
      <h3 class="c0606e0">* Superficie</h3>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Metros Útiles</label>
            <input name="useful_meters" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label>Metro de Cocina</label>
            <input name="kitchen_meter" type="text" class="form-control">
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Metros Construidos</label>
            <input name="meters_built" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label>Metro de Salón</label>
            <input name="hall_metro" type="text" class="form-control">
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Metros Lote</label>
            <input name="meters_lot" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label>Metro de Frente</label>
            <input name="front_metro" type="text" class="form-control">
         </div>
      </div>
   </div>
   <div class="row">
      <h3 class="c0606e0">* Datos de la Propiedad</h3>
      <div class="col-lg-4">
         <label>Tipo Piso</label>
         <div class="form-group">
            @foreach($data[5][2] as $tag)
               <div class="col-lg-2">
                  <label class="capitalize">
                     <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                     <div class="tag-name">{{ $tag->name }}</div>
                  </label>
               </div>
            @endforeach
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Agua Caliente</label>
            <br>
            <label class="pointer">
            <input type="radio" name="hot_water" value="1"> Si posee
            </label>
            <label class="pointer">
            <input type="radio" name="hot_water" value="0"> No posee
            </label>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Cocina</label>
            <br>
            <label class="pointer">
            <input type="radio" name="kitchen" value="1"> Si posee
            </label>
            <label class="pointer">
            <input type="radio" name="kitchen" value="0"> No posee
            </label>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<h3 class="c0606e0">* Tipo Entorno</h3>
<fieldset>
   <div class="row">
      @foreach($data[5][1] as $tag)
      <div class="col-lg-2">
         <label class="capitalize pointer">
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
            <div class="tag-name">{{ $tag->name }}</div>
         </label>
      </div>
      @endforeach
   </div>
</fieldset>
<hr>
<h3 class="c0606e0">
    * Propietario   
    <a href="#" id="search_owner" data-toggle="modal" data-target="#search_owner_modal">
        <i class="fa fa-eye"></i>
    </a>
    <a href="#" id="add_owner" data-toggle="modal" data-target="#add_owner_modal">
        <i class="fa fa-plus-square"></i>
    </a>
</h3>
<fieldset>
   <div class="row">
     <div class="col-lg-2">
        <label>Nombre</label>
        <div class="form-group">
           <input name="first_name" id="first_name" type="text" class="form-control" readonly>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Apellido</label>
        <div class="form-group">
           <input name="last_name" id="last_name" type="text" class="form-control" readonly>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Teléfono</label>
        <div class="form-group">
           <input name="phone" id="phone" type="number" class="form-control" readonly>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Móvil</label>
        <div class="form-group">
           <input name="cell_phone" id="cell_phone" type="number" class="form-control" readonly>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Tel: Trabajo</label>
        <div class="form-group">
           <input name="work_phone" id="work_phone" type="number" class="form-control" readonly>
        </div>
     </div>
      <div class="col-lg-2">
        <label>Dirección</label>
        <div class="form-group">
           <textarea name="description" id="description" class="form-control" rows="3" readonly></textarea>
        </div>
     </div>
   </div>
</fieldset>

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNkFKMWacwNBkCaS3P3o82V5cyP0shRIE&libraries=places&language=en"></script>
<script type="text/javascript">
   function initialize() {
    var options = {
  types: ['(cities)'],
  componentRestrictions: {country: "bo"}
 };

      var input = document.getElementById('searchTextField');
      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
function checkOpenMode() {
    var openModeRadio1 = document.getElementById("open_mode_radio_1").checked;
var openModeRadio2 = document.getElementById("open_mode_radio_0").checked;

var priceOpenModeText = document.getElementById("price_open_mode");


if(openModeRadio1 == true && openModeRadio2 == false){
    // open mode
    console.log('open mode');

    priceOpenModeText.disabled = false;

    
    

 }else if(openModeRadio1 == false && openModeRadio2 == true){
    // !! open mode
    console.log(' !! open mode');
    priceOpenModeText.disabled = true;
 }
}
</script>
@endsection