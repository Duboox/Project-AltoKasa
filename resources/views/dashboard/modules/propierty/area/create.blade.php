@extends('layouts.dashboard')
@section('title', 'Ciudad')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar Ciudad</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('city.index') }}">
              <strong>Ciudad</strong>
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
                {{ Form::open(['route' => 'area.store', 'method' => 'POST']) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="form-group">
                                  <label>Ciudad:</label> 
                                  <div class="form-group">
                                    <select class="form-control" name="id_city">
                                      <option value="">Selecciona</option>
                                      @foreach($citys as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                      @endforeach
                                    </select>
                                     @if ($errors->has('id_city'))
                                    <span class="error-validate">
                                    <strong>{{ $errors->first('id_city') }}</strong>
                                    </span>
                                  @endif
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Área de la Cuidad:</label> 
                                  <input type="text" name="name" placeholder="Ej: San Pedro" class="form-control">
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