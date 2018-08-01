@extends('layouts.dashboard')
@section('title', "Propiedad: {$data[0]['title']}")
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Propiedad #{{ $data[0]['id'] }}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            <li>
                <a href="{{ route('propierty.index') }}">
                    Propiedades
                </a>
            </li>
            <li>
                <a href="{{ route('propierty.edit', $data[0]['id']) }}">
                    <strong>Editar Propiedad</strong>
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInUp">
  <h1 class="font-bold">Propiedad</h1>
<hr>
<fieldset>
   <div class="row">
      <div class="col-lg-6">
         <div class="form-group">
            <h4>Titulo de la Propiedad (*)</h4>
            <h3 class="show-var-null">
             {{ var_null($data[0]['title']) }}
            </h3>
         </div>
      </div>
      <div class="col-lg-6">
         <div class="form-group">
            <h4>Descripción de La Propiedad (*)</h4>
            <h3 class="show-var-null">
              {{ var_null($data[0]['property_description']) }}
            </h3>
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
            <h4>Tipo de Operación (*)</h4>
            <h3 class="show-var-null">
              {{ var_null($data[0]['operation']['name']) }}
            </h3>
         </div>
         <div class="form-group">
            <h4>Zona Auxiliar</h4>
            <h3 class="show-var-null">
              {{ var_null($data[0]['auxiliary_zone']) }}
            </h3>
         </div>
         <div class="form-group">
            <h4>Planta</h4>
            <h3 class="show-var-null">
              {{ var_null($data[0]['plant']) }}
            </h3>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <h4>Tipo de Propiedad (*)</h4>
            <h3 class="show-var-null">
              {{ var_null($data[0]['type']['name']) }}
            </h3>
         </div>
         <div class="form-group">
            <h4>Tipo de Calle</h4>
            <h3 class="show-var-null">
              {{ var_null(type_street($data[0]['type_street'])) }}
            </h3>
         </div>
         <div class="form-group">
            <h3>Puerta</h3>
            <h4 class="show-var-null">
              {{ var_null(type_street($data[0]['door'])) }}
            </h4>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <h3>Ciudad (*)</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['city_name']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Dirección de la Propiedad (*)</h3>
             <h4 class="show-var-null">
              {{ var_null($data[0]['property_address']) }}
            </h4>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="form-group">
            <h3>Área (*)</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['city']['areas'][0]['name']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Número</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['number']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Edificio</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['building']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Anticrético</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['anticretico']) }}
            </h4>
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
            <h3>N° Habitaciones Simple</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['n_simple_rooms']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>N° de Salones</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['n_rooms']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Años de Construcción</h3>
            {{ var_null($data[0]['years_construction']) }}
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>N° Baños</h3>
            <h4 class="show-var-null">
            {{ var_null($data[0]['n_bathrooms']) }}
          </h4>
         </div>
         <div class="form-group">
            <h3>N° Parking</h3>
            <h4 class="show-var-null">
            {{ var_null($data[0]['n_parking']) }}
          </h4>
         </div>
         <div class="form-group">
            <h3>Comunidad</h3>
            <h4 class="show-var-null">
            {{ var_null($data[0]['community']) }}
          </h4>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>N° Aseos</h3>
            <h4 class="show-var-null">
            {{ var_null($data[0]['n_toilets']) }}
          </h4>
         </div>
         <div class="form-group">
            <h3>N° Plantas</h3>
            <h4 class="show-var-null">
            {{ var_null($data[0]['n_plants']) }}
          </h4>
         </div>
         <div class="form-group">
            <h3>Suite</h3>
            <h4 class="show-var-null">
            {{ var_null($data[0]['suite']) }}
          </h4>
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
          @if(count($data[0]['tags'])  == 0)
            <h1>No hay etiquetas</h1>
          @else
            @foreach($data[0]['tags'] as $tag)
               @if($tag->id_category == 1)
                  <div class="tag-name">{{ $tag->name }}</div>
               @endif
            @endforeach
          @endif
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
                <h3>Llavero</h3>
                <h4 class="show-var-null">
                {{ var_null(if_you_have(1, $data[0]['key_chain'])) }}
              </h4>
            </div>
            <div class="form-group">
               <h3>Prioridad</h3>
               <h4 class="show-var-null">
                {{ var_null($data[0]['priority']) }}
              </h4>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <h3>Creado por: </h3>
               <h4 class="show-var-null">
                 {{  var_null($data[0]['user']['name']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <h3>Contacto por: </h3>
                  <h4 class="show-var-null">
                    {{  var_null($data[0]['user']['name']) }}
                  </h4>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>Aviso Importante</h3>
            <h4 class="show-var-null">{{ var_null($data[0]['important_announcement']) }}</h4>
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
               <h3>Número</h3>
               <h4 class="show-var-null">
                 
               {{ var_null($data[0]['c_number']) }}
               </h4>
            </div>
            <div class="form-group">
               <h3>Ref Catastral</h3>
               <h4 class="show-var-null">
                 
               {{ var_null($data[0]['c_ref']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="form-group">
               <h3>Folio</h3>
               <h4 class="show-var-null">
                 
               {{ var_null($data[0]['folio']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="form-group">
               <h3>Registro de: </h3>
               <h4 class="show-var-null">
                 
               {{ var_null($data[0]['register_of']) }}
               </h4>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>Observación de Propiedad</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['property_observation']) }}
            </h4>
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
               <h3>Precio Inmobiliaria</h3>
               <h4 class="show-var-null">
                 {{ $data[0]['real_estate_price'] }}
               </h4>
            </div>
            <div class="form-group">
               <h3>Precio Propietario</h3>
               <h4 class="show-var-null">
                 {{ $data[0]['owner_price'] }}
               </h4>
            </div>
            <div class="form-group">
               <h3>Avaluo</h3>
               <h4 class="show-var-null">
                 {{ $data[0]['avaluo'] }}
               </h4>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="form-group">
               <h3>Valor Comisión</h3>
               <h4 class="show-var-null">
                 {{ $data[0]['commission_value'] }}
               </h4>
               
            </div>
            <div class="form-group">
               <h3>Calculo</h3>
               <h4 class="show-var-null">
                 {{ $data[0]['calculation'] }}
               </h4>
            </div>
            <div class="form-group">
               <h3>Precio modo abierto</h3>
               <h4 class="show-var-null">
                 {{ $data[0]['price_open_mode'] }}
               </h4>
            </div>
         </div>
         <h3>En Exclusiva</h3>
         <div class="col-lg-3 ">
            <div class="form-group">
               <h3>Desde</h3>
               <h4 class="show-var-null">
                 {{ date('Y-m-d', strtotime($data[0]['in_exclusive_from'])) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-3 ">
            <div class="form-group">
               <h3>Hasta</h3>
               <h4 class="show-var-null">
                 {{ date('Y-m-d', strtotime($data[0]['in_exclusive_to']))  }}
               </h4>
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
               <h3>Precio</h3>
               <h4 class="show-var-null">
                 {{ var_null($data[0]['rental_price'])}}
               </h4>
            </div>
         </div>
         <div class="col-lg-2">
            <h3>Mes</h3>
            
            <h4 class="show-var-null">
              {{ var_null( months($data[0]['rental_month']) ) }}
            </h4>
         </div>
         <div class="col-lg-2">
            <h3>Honorarios</h3>
            <h4 class="show-var-null">
              {{ var_null($data[0]['honorarium']) }}
            </h4>
         </div>
         <div class="col-lg-2">
            <div class="form-group">
               <h3>Mantenimiento Incluida</h3>
               <h4 class="show-var-null">
                {{ var_null($data[0]['m_included']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-2">
            <div class="form-group">
               <h3>Opción a Comprar</h3>
               <h4 class="show-var-null">
                  {{ var_null($data[0]['option_to_buy']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-2">
            <div class="form-group">
               <h3>Calefacción Incluida</h3>
               <h4 class="show-var-null">
                  {{ var_null($data[0]['heating_included']) }}
               </h4>
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
            <h3>Periodo Mínimo</h3>
            <h4 class="show-var-null">
               {{ var_null($data[0]['minimum_period']) }}
            </h4>
            <div class="form-group">
               <h3>Admite Extranjeros</h3>
               <h4 class="show-var-null">
                {{ var_null($data[0]['admits_foreigners']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-3">
            <h3>Max Inquilinos</h3>
            <h4 class="show-var-null">
               {{ var_null($data[0]['max_tenants']) }}
            </h4>
            <div class="form-group">
               <h3>Admite Animales</h3>
               <h4 class="show-var-null">
                  {{ var_null($data[0]['pets_allowed']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-3">
            <h3>Periodo Máximo</h3>
            <h4 class="show-var-null">
               {{ var_null($data[0]['maximum_period']) }}
            </h4>
            <div class="form-group">
               <h3>Estudiantes</h3>
               <h4 class="show-var-null">
               {{ var_null($data[0]['students']) }}
               </h4>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="form-group">
               <h3>Preferencias</h3>
               <h4 class="show-var-null">
               {{ var_null($data[0]['preferences']) }}
               </h4>
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
            <h3>Metros Útiles</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['useful_meters']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Metro de Cocina</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['kitchen_meter']) }}
            </h4>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>Metros Construidos</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['meters_built']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Metro de Salón</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['hall_metro']) }}
            </h4>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>Metros Lote</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['meters_lot']) }}
            </h4>
         </div>
         <div class="form-group">
            <h3>Metro de Frente</h3>
            <h4 class="show-var-null">
              
            {{ var_null($data[0]['front_metro']) }}
            </h4>
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
                    @if(count($data[0]['tags'])  == 0)
                          <h1>No hay etiquetas</h1>
                        @else
                          @foreach($data[0]['tags'] as $tag)
                             @if($tag->id_category == 3)
                                <div class="tag-name">{{ $tag->name }}</div>
                             @endif
                          @endforeach
                      @endif
                  </label>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>Agua Caliente</h3>
            <h4 class="show-var-null">
               {{ var_null($data[0]['hot_water']) }}
            </h4>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <h3>Cocina</h3>
            <h4 class="show-var-null">
               {{ var_null($data[0]['kitchen']) }}
            </h4>
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
        <h3>Nombre</h3>
        <div class="form-group">
           <h4 class="show-var-null">
             {{ var_null($data[0]['first_name']) }}
           </h4>
        </div>
     </div>
     <div class="col-lg-2">
        <h3>Apellido</h3>
        <div class="form-group">
           <h4 class="show-var-null">
             {{ var_null($data[0]['last_name']) }}
           </h4>
        </div>
     </div>
     <div class="col-lg-2">
        <h3>Teléfono</h3>
        <div class="form-group">
           <h4 class="show-var-null">
             {{ var_null($data[0]['phone']) }}
           </h4>
        </div>
     </div>
     <div class="col-lg-2">
        <h3>Móvil</h3>
        <div class="form-group">
           <h4 class="show-var-null">
             {{ var_null($data[0]['cell_phone']) }}
           </h4>
        </div>
     </div>
     <div class="col-lg-2">
        <h3>Tel: Trabajo</h3>
        <div class="form-group">
           <h4 class="show-var-null">
             {{ var_null($data[0]['work_phone']) }}
           </h4>
        </div>
     </div>
      <div class="col-lg-2">
        <h3>Dirección</h3>
        <div class="form-group">
           <h4 class="show-var-null">
             {{ $data[0]['description'] == '' ? 'El campo está vacio' : $data[0]['description'] }}
           </h4>
        </div>
     </div>
   </div>
</fieldset>
</div>
@endsection
