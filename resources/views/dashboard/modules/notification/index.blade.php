@extends('layouts.dashboard')
@section('title', 'Lista de Notificaciones')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Notificaciones</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('notification.create') }}">Crear Notificacion</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrados: {{ count($notifications) }}</h5>
               <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="ibox-content table-responsive">
              @include('alert.alerts')
               <table class="table responsive">
                  <thead>
                     <tr>
                        <th>#ID</th>
                        <th>Notificado</th>
                        <th>Resultado Operación</th>
                        <th>Enviado a: </th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($notifications as $notification)
                        <tr>
                          <td>{{ $notification->id }}</td>
                          <td>{{ $notification->user->name }}</td>
                          <td>{{ $notification->result }}</td>
                          <td>{{ $notification->email }}</td>

                            <td width="10px">
                                <a href="{{ route('notification.edit', $notification->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>

                            <td width="10px">
                                {{ Form::open(['route' => ['notification.destroy', $notification->id], 'method' => 'DELETE']) }}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {{ Form::close() }}
                            </td>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
               </table>
               {{ $notifications->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection