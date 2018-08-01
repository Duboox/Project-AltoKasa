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
                {{ Form::open(['route' => 'city.store', 'method' => 'POST']) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="form-group">
                                  <label>Ciudad:</label> 
                                  <input type="text" name="name" placeholder="Ej: Cochabamba" class="form-control">
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