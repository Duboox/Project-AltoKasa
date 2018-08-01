@extends('layouts.dashboard')
@section('title', 'Redes Sociales')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar Red Social</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('social.index') }}">
              <strong>Redes Sociales</strong>
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
                {{ Form::model($social, ['route' => ['social.update', $social->id], 'method' => 'PUT']) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                    <div class="form-group">
                                      <label>Red Social</label> 
                                      <input type="text" name="name" placeholder="Ej: Facebook" class="form-control" value="{{ $social->name }}">
                                  @if ($errors->has('name'))
                                    <span class="error-validate">
                                    <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                  @endif
                                    </div>
                                    <div class="form-group">
                                      <label>Activo/Inactivo</label> 
                                      Si: <input type="radio" name="use" value="1" checked>
                                      No: <input type="radio" name="use" value="0">
                                    </div>
                                    <div class="form-group">
                                      <label>Link</label> 
                                      <input type="url" name="link" placeholder="Ej: https://www.facebook.com" class="form-control" value="{{ $social->link }}">
                                  @if ($errors->has('link'))
                                    <span class="error-validate">
                                    <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                  @endif
                                    </div>
                                    <div class="form-group">
                                      <label>Icon</label> 
                                      <input type="text" name="icon" placeholder="Ej: facebook" class="form-control" value="{{ $social->icon }}">
                                  @if ($errors->has('icon'))
                                    <span class="error-validate">
                                    <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                  @endif
                                    </div>
                                     <div class="form-group">
                                      <label>Abrir en otra ventana</label> 
                                      Si: <input type="radio" name="extras" value="1">
                                      No: <input type="radio" name="extras" value="0" checked>
                                    </div>
                                    <div class="form-group">
                                      <label>Titulo Dinamico</label> 
                                      <input type="text" name="title" placeholder="Ej: Siguenos en Facebook" class="form-control" value="{{ $social->title }}">
                                  @if ($errors->has('title'))
                                    <span class="error-validate">
                                    <strong>{{ $errors->first('title') }}</strong>
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