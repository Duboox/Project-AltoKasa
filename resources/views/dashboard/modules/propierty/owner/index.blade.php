@extends('layouts.dashboard')
@section('title', 'Lista de Propietario')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Propietario</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('owner.create') }}">Crear Propietario</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrados: {{ count($owners) }}</h5>
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
                        <th>Apellido</th>
                        <th>Télefono</th>
                        <th>Móvil</th>
                        <th>Télefono Trabajo</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($owners as $owner)
                        <tr>
                          <td>{{ $owner->id }}</td>
                          <td>{{ $owner->first_name }}</td>
                          <td>{{ $owner->last_name }}</td>
                          <td>{{ $owner->phone }}</td>
                          <td>{{ var_null($owner->cell_phone) }}</td>
                          <td>{{ var_null($owner->work_phone) }}</td>
                          <td>
                            <div class="owner-description">
                              {{ var_null($owner->description) }}
                            </div>
                          </td>
                            <td width="10px">
                                <a href="{{ route('owner.edit', $owner->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['owner.destroy', $owner->id], 'method' => 'DELETE']) }}
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
               {{ $owners->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection