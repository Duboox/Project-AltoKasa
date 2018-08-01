@extends('layouts.dashboard')
@section('title', 'Crear Notificacion')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Registrar notificacion</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('notification.index') }}">
            <strong>Notificacion</strong>
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
               {{ Form::open(['route' => 'notification.store', 'method' => 'POST']) }}
               <div class="ibox-content">
                  <div class="row">
                     <div class="col-sm-6 b-r">
                        <div class="form-group">
                           <label>Correo a Notificar</label> 
                           <select name="email" class="form-control">
                              <option value="">Seleccione</option>
                                @foreach($users_data as $user)
                                    <option value="{{ $user->email }}">{{ user_email($user->name, $user->email) }}</option>
                                @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Asunto</label> 
                           <input type="text" name="subject" class="form-control">
                              @if ($errors->has('subject'))
                                 <span class="error-validate">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                 </span>
                              @endif
                        </div>
                        <div class="form-group">
                           <label>Notificación</label> 
                           <textarea name="message" class="form-control"></textarea>
                              @if ($errors->has('message'))
                                 <span class="error-validate">
                                    <strong>{{ $errors->first('message') }}</strong>
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