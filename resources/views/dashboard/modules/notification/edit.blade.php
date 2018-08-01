@extends('layouts.dashboard')
@section('title', 'Editar Notificaciones')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar Cliente</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('notification.index') }}">
              <strong>Notificaciones</strong>
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
                {{ Form::model($notification, ['route' => ['notification.update', $notification->id], 'method' => 'PUT']) }}
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="form-group">
                                  <label>Resultado:</label> 
                                  <input type="text" name="result" placeholder="Ej: Resultado" class="form-control" value="{{ $notification->result}}">

                                  <label>E-mail</label> 
                                  <input type="text" name="email" placeholder="Ej: ejemplo@gmail.com" class="form-control" value="{{ $notification->email }}">
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