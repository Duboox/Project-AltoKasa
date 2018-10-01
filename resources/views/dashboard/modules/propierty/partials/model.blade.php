<h1 class="font-bold">Propiedad</h1>
<hr>
<fieldset>
   <div class="row">
   <div class="col-lg-12">
      <div class="ibox-2 float-e-margins">
         <div class="ibox-title">
            <h5>Requeridos (*)</h5>
            <div class="ibox-tools">
               <button type="submit" class="btn btn-primary btn-xs" id="save-propierty">Actualizar Propiedad</button>
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
         <div class="form-group">
            <label>Titulo de la Propiedad (*)</label>
            <input name="property_title" type="text" class="form-control" {{ placeholder_value($data[0]['title']) }}>
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
            {{ textarea_value('property_description', $data[0]['property_description'], 5) }}
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
               <optgroup label="Operación Selecciona">
                  <option value="{{ $data[0]['operation']['id'] }}" selected>{{ $data[0]['operation']['name'] }}</option>
              </optgroup>
               <optgroup label="Toda las operaciones">
                 @foreach($data[4] as $type_operation)
                    <option value="{{ $type_operation->id }}">{{ $type_operation->name }}</option>
                  @endforeach
              </optgroup>
            </select>
         </div>
         <div class="form-group">
            <label>Zona Auxiliar</label>
            <input name="auxiliary_zone" type="text" class="form-control" {{ placeholder_value($data[0]['auxiliary_zone']) }}>
         </div>
         <div class="form-group">
            <label>Planta</label>
            <input name="plant" type="number" class="form-control" {{ placeholder_value($data[0]['plant']) }}>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Tipo de Propiedad (*)</label>
            <select class="form-control" name="id_type_property">
               <optgroup label="Tipo P. Selecciona">
                  <option value="{{ $data[0]['type']['id'] }}" selected>{{ $data[0]['type']['name'] }}</option>
              </optgroup>
               <optgroup label="Tipos de Propiedad">
                 @foreach($data[5] as $type_property)
                    <option value="{{ $type_property->id }}">{{ $type_property->name }}</option>
                  @endforeach
              </optgroup>
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
               <optgroup label="Selección Actual">
                  <option value="{{ $data[0]->type_street }}" selected>{{ type_street($data[0]['type_street']) }}</option>
              </optgroup>
               <optgroup label="Tipos de Calles">
                 <option value="0">Avenida</option>
                  <option value="1">Calle</option>
                  <option value="2">Autopista</option>
                  <option value="3">Callejon</option>
                  <option value="4">Pavimento enpedrado</option>
                  <option value="5">Tierra</option>
              </optgroup>
            </select>
         </div>
         <div class="form-group">
            <label>Puerta</label>
            <input name="door" type="text" class="form-control" {{ placeholder_value($data[0]['door']) }}>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <label>Ciudad (*)</label>
            <input id="searchTextField" name="city_name" class="form-control" type="text" size="50" {{ placeholder_value($data[0]['city_name']) }} autocomplete="on">
            <!-- <select class="form-control" name="id_city" id="city_edit">
               <optgroup label="Ciudad Actual">
                  <option value="{{ $data[0]['city']['id'] }}" selected>{{ $data[0]['city']['name'] }}</option>
              </optgroup>
               <optgroup label="Ciudades">
                 @foreach($data[2] as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                  @endforeach
              </optgroup>
            </select> -->
            @if ($errors->has('city_name'))
               <span class="error-validate">
                  <strong>{{ $errors->first('city_name') }}</strong>
               </span>
            @endif
         </div>
         <div class="form-group">
            <label>Dirección de la Propiedad (*)</label>
            {{ textarea_value('property_address', $data[0]['property_address'], 5) }}
            @if ($errors->has('property_address'))
               <span class="error-validate">
                  <strong>{{ $errors->first('property_address') }}</strong>
               </span>
            @endif
         </div>
      </div>
      <div class="col-lg-3">
         <!-- <div class="form-group">
            <label>Área (*)</label>
            <select class="form-control" name="id_area">
               <optgroup label="Área Actual">
                  <option value="{{ $data[0]['city']['areas'][0]['id'] }}" selected>{{ $data[0]['city']['areas'][0]['name'] }}</option>
              </optgroup>
               <optgroup label="Áreas Registradas">
                  @foreach($data[3] as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                  @endforeach
              </optgroup>
            </select>
            @if ($errors->has('id_area'))
               <span class="error-validate">
                  <strong>{{ $errors->first('id_area') }}</strong>
               </span>
            @endif
         </div> -->
         <div class="form-group">
            <label>Número</label>
            <input name="number" type="number" class="form-control" {{ placeholder_value($data[0]['number']) }}>
         </div>
         <div class="form-group">
            <label>Edificio</label>
            <input name="building" type="text" class="form-control" {{ placeholder_value($data[0]['building']) }}>
         </div>
         <div class="form-group">
            <label>Anticrético</label>
            <br>
            <label class="pointer">
                {{ radio_value('anticretico', $data[0]['anticretico']) }}
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
            <input name="n_simple_rooms" type="number" class="form-control" {{ placeholder_value($data[0]['n_simple_rooms']) }}>
         </div>
         <div class="form-group">
            <label>N° de Salones</label>
            <input name="n_rooms" type="number" class="form-control" {{ placeholder_value($data[0]['n_rooms']) }}>
         </div>
         <div class="form-group">
            <label>Años de Construcción</label>
            <input name="years_construction" type="number" class="form-control" {{ placeholder_value($data[0]['years_construction']) }}>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>N° Baños</label>
            <input name="n_bathrooms" type="number" class="form-control" {{ placeholder_value($data[0]['n_bathrooms']) }}>
         </div>
         <div class="form-group">
            <label>N° Parking</label>
            <input name="n_parking" type="number" class="form-control" {{ placeholder_value($data[0]['n_parking']) }}>
         </div>
         <div class="form-group">
            <label>Comunidad</label>
            <input name="community" type="text" class="form-control" {{ placeholder_value($data[0]['community']) }}>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>N° Aseos</label>
            <input name="n_toilets" type="number" class="form-control" {{ placeholder_value($data[0]['n_toilets']) }}>
         </div>
         <div class="form-group">
            <label>N° Plantas</label>
            <input name="n_plants" type="number" class="form-control" {{ placeholder_value($data[0]['n_plants']) }}>
         </div>
         <div class="form-group">
            <label>Suite</label>
            <br>
            <label class="pointer">
               {{ radio_value('suite', $data[0]['suite']) }}
            </label>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<h1 class="font-bold">Calidades</h1>
<fieldset>
   <div class="row">
      <div class="col-lg-2">
         <label class="capitalize pointer">
            @foreach($data[0]['tags'] as $tag)
               @if($tag->id_category == 1)
                  <input type="checkbox" name="tags[]" value="{{ $tag->id }}" checked>
                  <div class="tag-name">{{ $tag->name }}</div>
               @endif
            @endforeach
         </label>
      </div>
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
                  {{ radio_value('key_chain', $data[0]['key_chain']) }}
               </label>
            </div>
            <div class="form-group">
               <label>Prioridad</label>
               <input name="priority" type="text" class="form-control" {{ placeholder_value($data[0]['priority']) }}>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Creado por: </label>
                  <select name="created_by" class="form-control">
                     <option value="">Seleccione</option>
                     <optgroup label="Usuario Selecionado">
                        <option value="{{ $data[0]['user']['id'] }}" selected>{{  $data[0]['user']['name'] }}</option>
                    </optgroup>
                     <optgroup label="Usuarios Registrados">
                        @foreach($data[1] as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </optgroup>
                 </select>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Contacto por: </label>
                  <select name="contact_by" class="form-control">
                     <option value="">Seleccione</option>
                     <optgroup label="Usuario Selecionado">
                        <option value="{{ $data[0]['user']['id'] }}" selected>{{  $data[0]['user']['name'] }}</option>
                    </optgroup>
                     <optgroup label="Usuarios Registrados">
                        @foreach($data[1] as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </optgroup>
                  </select>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Aviso Importante</label>
            {{ textarea_value('important_announcement', $data[0]['important_announcement'], 5) }}
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
               <input name="c_number" type="number" class="form-control" {{ placeholder_value($data[0]['c_number']) }}>
            </div>
            <div class="form-group">
               <label>Ref Catastral</label>
               <input name="c_ref" type="text" class="form-control" {{ placeholder_value($data[0]['c_ref']) }}>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="form-group">
               <label>Folio</label>
               <input name="folio" type="text" class="form-control" {{ placeholder_value($data[0]['folio']) }}>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <label>Registro de: </label>
               <input name="register_of" type="text" class="form-control" {{ placeholder_value($data[0]['register_of']) }}>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Observación de Propiedad</label>
            {{ textarea_value('property_observation', $data[0]['property_observation'], 5) }}
         </div>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-12">
         <h3 class="c0606e0">* Datos de Venta</h3>
         <div class="col-lg-3">
            <div class="form-group">
               <label>Precio Inmobiliaria</label>
               <input name="real_estate_price" id="real_estate_price" type="number" class="form-control"  {{ placeholder_value($data[0]['real_estate_price']) }}>
            </div>
            <div class="form-group">
               <label>Precio Propietario</label>
               <input name="owner_price" type="number" class="form-control" {{ placeholder_value($data[0]['owner_price']) }} >
            </div>
            <div class="form-group">
               <label>Avaluo</label>
               <input name="avaluo" type="number" class="form-control" {{ placeholder_value($data[0]['avaluo']) }} ">
            </div>
         </div>
         <div class="col-lg-3">
            <div class="form-group">
               <label>Valor Comisión</label>
               <select name="commission_value" id="commission_value" class="form-control">
                  <optgroup label="Comisión selecionada">
                     <option value="{{ $data[0]['commission_value'] }}" selected>{{ $data[0]['commission_value'] }}%</option>
                    </optgroup>
                     <optgroup label="Calculos">
                     <option value="2">2%</option>
                      <option value="2.5">2,5%</option>
                      <option value="3">3%</option>
                      <option value="3.5">3,5%</option>
                      <option value="4">4%</option>
                     <option value="4.5">4,5%</option>
                     <option value="5">5%</option>
                    </optgroup>
               </select>
            </div>
            <div class="form-group">
               <label>Calculo</label>
               <input name="calculation" id="calculation" type="text" class="form-control" readonly {{ placeholder_value($data[0]['calculation']) }}>
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
            <input name="price_open_mode" id="price_open_mode" type="text" class="form-control" disabled {{ placeholder_value($data[0]['price_open_mode']) }}>
         </div>
         </div>
         <h3>En Exclusiva</h3>
         <div class="col-lg-3 dedede">
            <div class="form-group">
               <label>Desde</label>
               <input name="in_exclusive_from" type="date" class="form-control" value="{{ date('Y-m-d', strtotime($data[0]['in_exclusive_from'])) }}">
            </div>
         </div>
         <div class="col-lg-3 dedede">
            <div class="form-group">
               <label>Hasta</label>
               <input name="in_exclusive_to" type="date" class="form-control" value="{{ date('Y-m-d', strtotime($data[0]['in_exclusive_to']))  }}">
            </div>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-12">
         <h3 class="c0606e0">* Datos de Alquiler</h3>
         <div class="col-lg-2">
            <div class="form-group">
               <label>Precio</label>
               <input name="rental_price" type="number" class="form-control" {{ placeholder_value($data[0]['rental_price']) }}>
            </div>
         </div>
         <div class="col-lg-2">
            <label>Mes</label>
            <select name="rental_month" class="form-control">
               <optgroup label="Seleccionado">
                     <option value="{{ $data[0]->rental_month }}" selected>{{ months($data[0]['rental_month']) }}</option>
               </optgroup>
               <optgroup label="Meses">
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
              </optgroup>
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
                  {{ radio_value('m_included', $data[0]['m_included']) }}
               </label>
            </div>
         </div>
         <div class="col-lg-2">
            <div class="form-group">
               <label>Opción a Comprar</label>
               <br>
               <label class="pointer">
                  {{ radio_value('option_to_buy', $data[0]['option_to_buy']) }}
               </label>
            </div>
         </div>
         <div class="col-lg-2">
            <div class="form-group">
               <label>Calefacción Incluida</label>
               <br>
               <label class="pointer">
                  {{ radio_value('heating_included', $data[0]['heating_included']) }}
               </label>
            </div>
         </div>
      </div>
   </div>
</fieldset>
<fieldset>
   <div class="row">
      <div class="col-lg-12">
         <h3 class="c0606e0">* Preferencias del arrendador</h3>
         <div class="col-lg-3">
            <label>Periodo Mínimo</label>
            <div class="form-group">
               <input name="minimum_period" type="number" class="form-control" {{ placeholder_value($data[0]['minimum_period']) }}>
            </div>
            <div class="form-group">
               <label>Admite Extranjeros</label>
               <br>
               <label class="pointer">
                  {{ radio_value('admits_foreigners', $data[0]['admits_foreigners']) }}
               </label>
            </div>
         </div>
         <div class="col-lg-3">
            <label>Max Inquilinos</label>
            <div class="form-group">
               <input name="max_tenants" type="number" class="form-control" {{ placeholder_value($data[0]['max_tenants']) }}>
            </div>
            <div class="form-group">
               <label>Admite Animales</label>
               <br>
               <label class="pointer">
                  {{ radio_value('pets_allowed', $data[0]['pets_allowed']) }}
               </label>
            </div>
         </div>
         <div class="col-lg-3">
            <label>Periodo Máximo</label>
            <div class="form-group">
               <input name="maximum_period" type="number" class="form-control" {{ placeholder_value($data[0]['maximum_period']) }}>
            </div>
            <div class="form-group">
               <label>Estudiantes</label>
               <br>
               <label class="pointer">
               {{ radio_value('students', $data[0]['students']) }}
               </label>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="form-group">
               <label>Preferencias</label>
               {{ textarea_value('preferences', $data[0]['preferences'], 5) }}
            </div>
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
            <input name="useful_meters" type="text" class="form-control" {{ placeholder_value($data[0]['useful_meters']) }}>
         </div>
         <div class="form-group">
            <label>Metro de Cocina</label>
            <input name="kitchen_meter" type="text" class="form-control" {{ placeholder_value($data[0]['kitchen_meter']) }}>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Metros Construidos</label>
            <input name="meters_built" type="text" class="form-control" {{ placeholder_value($data[0]['meters_built']) }}>
         </div>
         <div class="form-group">
            <label>Metro de Salón</label>
            <input name="hall_metro" type="text" class="form-control" {{ placeholder_value($data[0]['hall_metro']) }}>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Metros Lote</label>
            <input name="meters_lot" type="text" class="form-control" {{ placeholder_value($data[0]['meters_lot']) }}>
         </div>
         <div class="form-group">
            <label>Metro de Frente</label>
            <input name="front_metro" type="text" class="form-control" {{ placeholder_value($data[0]['front_metro']) }}>
         </div>
      </div>
   </div>
   <div class="row">
      <h3 class="c0606e0">* Datos de la Propiedad</h3>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Tipo Piso</label>
            <div class="row">
               <div class="col-lg-2">
                  <label class="capitalize pointer">
                     @foreach($data[0]['tags'] as $tag)
                        @if($tag->id_category == 3)
                           <input type="checkbox" name="tags[]" value="{{ $tag->id }}" checked>
                           <div class="tag-name">{{ $tag->name }}</div>
                        @endif
                     @endforeach
                  </label>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Agua Caliente</label>
            <br>
            <label class="pointer">
               {{ radio_value('hot_water', $data[0]['hot_water']) }}
            </label>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label>Cocina</label>
            <br>
            <label class="pointer">
               {{ radio_value('kitchen', $data[0]['kitchen']) }}
            </label>
         </div>
      </div>
   </div>
</fieldset>
<hr>
<h3 class="c0606e0">* Tipo Entorno</h3>
<fieldset>
   <div class="row">
      <div class="col-lg-2">
         <label class="capitalize pointer">
            @foreach($data[0]['tags'] as $tag)
               @if($tag->id_category == 2)
                  <input type="checkbox" name="tags[]" value="{{ $tag->id }}" checked>
                  <div class="tag-name">{{ $tag->name }}</div>
               @endif
            @endforeach
         </label>
      </div>
   </div>
</fieldset>
<hr>
<fieldset>
   <div class="row">
     <div class="col-lg-2">
        <label>Nombre</label>
        <div class="form-group">
           <input name="first_name" id="first_name" type="text" class="form-control" {{ placeholder_value($data[0]['first_name']) }}>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Apellido</label>
        <div class="form-group">
           <input name="last_name" id="last_name" type="text" class="form-control" {{ placeholder_value($data[0]['last_name']) }}>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Teléfono</label>
        <div class="form-group">
           <input name="phone" id="phone" type="number" class="form-control" {{ placeholder_value($data[0]['phone']) }}>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Móvil</label>
        <div class="form-group">
           <input name="cell_phone" id="cell_phone" type="number" class="form-control" {{ placeholder_value($data[0]['cell_phone']) }}>
        </div>
     </div>
     <div class="col-lg-2">
        <label>Tel: Trabajo</label>
        <div class="form-group">
           <input name="work_phone" id="work_phone" type="number" class="form-control" {{ placeholder_value($data[0]['work_phone']) }}>
        </div>
     </div>
      <div class="col-lg-2">
        <label>Dirección</label>
        <div class="form-group">
           <textarea name="description" id="description" class="form-control" rows="3">{{ $data[0]['description'] == '' ? 'El campo está vacio' : $data[0]['description'] }}</textarea>
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