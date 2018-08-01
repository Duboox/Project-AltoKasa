@extends('layouts.dashboard')
@section('title', 'Editar Foto')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Editar Foto</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('photos.index') }}">
              <strong>Foto</strong>
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
               <h5>Edición</h5>
            </div>
            <div class="ibox-content">
                {{ Form::model($photo, ['route' => ['photos.update', $photo->id], 'method' => 'PUT', 'files' => true,]) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                              @include('alert.alerts')
                                <div class="form-group">
                                    <img src="{{ url_img_propierty($photo->img) }}" width="50" height="50">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="file">
                                </div>
                                <div class="form-group">
                                  <label>Visible *</label>
                                      <select class="form-control" name="status">
                                        <option value="">Selecciona</option>
                                          <option value="1" selected>Visible</option>
                                          <option value="0">Oculta</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Imagen Principal *</label>
                                      <div>
                                        Activar: <input type="radio" name="primary" value="1">
                                        Desactivar: <input type="radio" name="primary" value="0">
                                      </div>
                                  </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                      <strong>Guardar</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
               {{ Form::close() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection