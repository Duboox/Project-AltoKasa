@extends('layouts.dashboard')
@section('title', 'Editar Tipo de Propiedad')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Editar Tipo de Propiedad</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('type-propierty.index') }}">
              <strong>Tipos de Propiedades</strong>
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
                {{ Form::model($type_property, ['route' => ['type-propierty.update', $type_property->id], 'method' => 'PUT']) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="form-group">
                                  <label>Estado:</label> 
                                  <div class="form-group">
                                    <select class="form-control" name="status">
                                      <option value="">Selecciona</option>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Nombre:</label> 
                                  <input type="text" name="name" placeholder="Ej: Casa" class="form-control" value="{{ $type_property->name }}">
                                  @if ($errors->has('name'))
                                    <span class="error-validate">
                                    <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                  @endif
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