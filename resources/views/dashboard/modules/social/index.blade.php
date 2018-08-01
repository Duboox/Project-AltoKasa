@extends('layouts.dashboard')
@section('title', 'Redes Sociales')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Lista de Redes Sociales</h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ route('home') }}">Inicio</a>
         </li>
         <li class="active">
            <a href="{{ route('social.create') }}">Crear Redes Sociales</a>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Registrada: {{ count($socials_data) }}</h5>
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
                        <th>Estado</th>
                        <th>Link</th>
                        <th>Icono</th>
                        <th>Opción Extra</th>
                        <th>Titulo</th>
                        <th>Creador</th>
                        <th colspan="1">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach($socials_data as $social)
                        <tr>
                            <td>{{ $social->id }}</td>
                            <td>{{ $social->name }}</td>
                            <td>{{ trueFalseForHumans($social->use) }}</td>
                            <td>
                              Link a: <a href="{{ $social->link }}" target="_blank">{{ $social->name }}</a>
                            </td>
                            <td>{{ $social->icon }}</td>
                            <td>{{ trueFalseForHumans($social->extras) }}</td>
                            <td>{{ $social->title }}</td>
                            <td>{{ user_name() }}</td>
                            <td>
                            <td width="10px">
                                <a href="{{ route('social.edit', $social->id) }}" class="btn btn-sm btn-info">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                {{ Form::open(['route' => ['social.destroy', $social->id], 'method' => 'DELETE']) }}
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
                {{ $socials_data->render() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection