@extends('layouts.dashboard')
@section('title', 'Clientes')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar Cliente</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('client.index') }}">
              <strong>Clientes</strong>
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
                {{ Form::model($client, ['route' => ['client.update', $client->id], 'method' => 'PUT']) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="form-group">
                                  <label>Nombre:</label> 
                                    <input type="text" name="first_name" placeholder="Ej: Juan" class="form-control" value="{{ $client->first_name }}">
                                    @if ($errors->has('first_name'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('first_name') }}</strong>
                                      </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Apellido:</label> 
                                    <input type="text" name="last_name" placeholder="Ej: Romero" class="form-control" value="{{ $client->last_name }}">
                                    @if ($errors->has('last_name'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('last_name') }}</strong>
                                      </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Carnet de Identidad:</label> 
                                    <input type="number" name="identy_license" placeholder="Ej: 4646545654" class="form-control" value="{{ $client->identy_license }}">
                                    @if ($errors->has('identy_license'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('identy_license') }}</strong>
                                      </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Email:</label> 
                                    <input type="email" name="email" placeholder="Ej: ejemplo@mail.com" class="form-control" value="{{ $client->email }}">
                                    @if ($errors->has('email'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Telefono:</label> 
                                    <input type="tel" name="phone" placeholder="Ej: +58 5556699" class="form-control" value="{{ $client->phone }}">
                                    @if ($errors->has('phone'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('phone') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                  
                                <div class="form-group">
                                  <label>Estado:</label> 
                                  <select name="status" class="form-control">
                                      <option value="">Seleccione</option>
                                      <option value="{{ $client->status }}" selected>{{ status_client($client->status) }}</option>
                                      <option value="0">Activo</option>
                                      <option value="1">No activo</option>
                                      <option value="2">En espera</option>
                                      <option value="3">Contactado</option>
                                      <option value="4">Visita</option>
                                      <option value="5">Realizada</option>
                                      <option value="6">En espera por visita</option>
                                      <option value="7">Venta concretada</option>
                                    </select> 
                                    @if ($errors->has('status'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('status') }}</strong>
                                      </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Tipo</label>
                                    <select name="type" class="form-control">
                                      <option value="">Seleccione</option>
                                      <option value="{{ $client->type }}" selected>{{ type_client($client->type) }}</option>
                                      <option value="0">Comprar</option>
                                      <option value="1">Alquilar</option>
                                      <option value="2">Vender</option>
                                    </select> 
                                    @if ($errors->has('type'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('type') }}</strong>
                                      </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                  <label>Direccion:</label> 
                                    <textarea name="addres" placeholder="Ej: Direccion"  class="form-control">
                                      {{ $client->addres }}
                                    </textarea>
                                    @if ($errors->has('addres'))
                                      <span class="error-validate">
                                          <strong>{{ $errors->first('addres') }}</strong>
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