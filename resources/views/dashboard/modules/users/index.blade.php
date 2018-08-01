@extends('layouts.dashboard')
@section('title', 'Usuarios')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Usuarios</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('users.index') }}">Usuarios</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Usuarios Registrados</h5>
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
                        <th>Nombre</th>
                        <th>Correo Eléctronico</th>
                        <th>Teléfono</th>
                        <th>Confirmación</th>
                        <th>Avatar</th>
                        @can(!'users.index')
                          <th>Opciones</th>
                        @endcan
                        <th colspan="3">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                              @if($user->confirmed == 1)
                                <strong class="confirmed">Confirmado</strong>
                              @else
                                <strong class="no-confirmed">No confirmado</strong>
                              @endif
                            </td>
                            <td>
                              <a href="{{ url_avatar($user->avatar) }}" target="_blank">
                                <img src="{{ url_avatar($user->avatar) }}" class="table-avatar">
                              </a>
                            </td>
                            @can('users.edit')
                            <td width="10px">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            @endcan
                            @can('users.destroy')
                            <td width="10px">
                                {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) }}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {{ Form::close() }}
                            </td>
                            @endcan
                            @if($user->confirmed !== 1)
                            @can('users.confirmed')
                              <td width="10px">
                                  {{ Form::open(['route' => ['users.confirmed', $user->id], 'method' => 'POST']) }}
                                      <button class="btn btn-sm btn-success">
                                          Activar
                                      </button>
                                  {{ Form::close() }}
                              </td>
                            @endcan
                            @endif
                        </tr>
                      @endforeach
                    </tbody>
               </table>
               {{ $data->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection