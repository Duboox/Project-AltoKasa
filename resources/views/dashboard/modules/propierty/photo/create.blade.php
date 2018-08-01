@extends('layouts.dashboard')
@section('title', 'Galeria')
@section('css')
  {{ css_plugin_dashboard('dropzone/basic.css') }}
  {{ css_plugin_dashboard('dropzone/dropzone.css') }}
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Subir archivo</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('photos.index') }}">
              <strong>Galeria</strong>
            </a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Zona de Carga</h5>
            </div>
            <div class="ibox-content">
              {{ Form::model($propiertys_data, ['route' => ['photo.store', $propiertys_data->id], 'method' => 'POST', 'files' => true, 'id' => 'my-awesome-dropzone' , 'class' => 'dropzone dz-clickable']) }}
                <div class="form-group">
                    <input type="hidden" name="id_property" id="id_property" value="{{ $propiertys_data->id }}">
                </div>
                  <div class="dropzone-previews"></div>
                  <button type="submit" class="btn btn-primary pull-right">
                    ¡Cargar Fotos!
                  </button>
                  <div class="dz-default dz-message">
                    <span>Arrastra los archivos aquí para subirlos</span>
                  </div>
               {{ Form::close() }}
               <div>
                  <div class="m text-right">
                    <small>Arrastra o selecciona los archivos en la caja</small> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
  <!-- Mainly scripts -->
    {{ js_dashboard('jquery-2.1.1.js') }}
    {{ js_dashboard('bootstrap.min.js') }}
    {{ js_dashboard('plugins/metisMenu/jquery.metisMenu.js') }}
    {{ js_dashboard('plugins/slimscroll/jquery.slimscroll.min.js') }}
    {{ js_dashboard('template.js') }}
    <!-- Custom and plugin javascript -->
    {{ js_dashboard('plugins/pace/pace.min.js') }}
    <!-- DROPZONE -->
    {{ js_plugin_dashboard('dropzone/dropzone.js') }}
 <script>
        $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 100,
                maxFiles: 10,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                      this.on("sendingmultiple", function(data, xhr, formData) {
                        formData.append("id_property", $("#id_property").val());
                    });
                      this.on("successmultiple", function(files, response) {
                        alert(response.message);
                        window.location = '{{ route('photos.index') }}'; 
                    });
                      this.on("errormultiple", function(files, response) {

                        console.log('error..');

                    });
                }

            }

       });
    </script>
@endsection